$baseDir = "public\docs\planes-estudio"
$individualDir = "$baseDir\individual"
if (-not (Test-Path $individualDir)) { New-Item -ItemType Directory -Path $individualDir | Out-Null }

function Create-PDF($filename, $title, $content) {
    if (-not $content) { Write-Host "SALTADO: $filename (sin contenido)"; return }
    $path = Join-Path $individualDir $filename
    $header = "--------------------------------------------------`r`n"
    $header += "CRUZ ROJA COLOMBIANA - SECCIONAL HUILA`r`n"
    $header += "PLAN DE ESTUDIOS: $title`r`n"
    $header += "--------------------------------------------------`r`n`r`n"
    $fullContent = $header + $content
    $fullContent | Out-File -FilePath $path -Encoding utf8
    Write-Host "Generado: $filename"
}

$tecnicos = Get-Content (Join-Path $baseDir "tecnicos.txt") -Raw
$diplomados = Get-Content (Join-Path $baseDir "diplomados.txt") -Raw
$belleza = Get-Content (Join-Path $baseDir "belleza.txt") -Raw

# 1. Belleza Integral
if ($tecnicos -match "PROGRAMA.*?BELLEZA INTEGRAL(.*?)PROGRAMA") {
    Create-PDF "belleza-integral.pdf" "BELLEZA INTEGRAL" $matches[1]
}

# 2. Barbería (Curso Intensivo)
if ($belleza -match "BARBERIA(.*?)PEINADOS") {
    Create-PDF "barberia.pdf" "CURSO DE BARBERIA" $matches[1]
}

# 3. Auxiliar Enfermería
if ($tecnicos -match "AUXILIAR EN ENFERMERIA(.*?)PROGRAMA") {
    Create-PDF "auxiliar-enfermeria.pdf" "AUXILIAR EN ENFERMERIA" $matches[1]
}

# 4. Cuidado Adulto Mayor
if ($tecnicos -match "CUIDADOR ADULTO MAYOR(.*?)PROGRAMA") {
    Create-PDF "cuidado-adulto-mayor.pdf" "CUIDADOR ADULTO MAYOR" $matches[1]
}

# 5. Asistente de Marketing y Ventas
if ($tecnicos -match "ASISTENTE DE MARKETING Y VENTAS(.*?)PROGRAMA") {
    Create-PDF "asistente-marketing-ventas.pdf" "ASISTENTE DE MARKETING Y VENTAS" $matches[1]
}

# 6. Sastre de Confección sobre Medida
if ($tecnicos -match "SASTRE DE CONFECCION SOBRE MEDIDA(.*?)PROGRAMA") {
    Create-PDF "sastre-confeccion.pdf" "SASTRE DE CONFECCION SOBRE MEDIDA" $matches[1]
}

# 7. Auxiliar en Farmacia
if ($tecnicos -match "AUXILIAR EN FARMACIA(.*?)PROGRAMA") {
    Create-PDF "auxiliar-farmacia.pdf" "AUXILIAR EN FARMACIA" $matches[1]
}

# 8. Masajes Estéticos y Técnicas de SPA
if ($belleza -match "MASAJES ESTETICOS.*?SPA(.*)") {
    Create-PDF "masajes-esteticos-spa.pdf" "MASAJES ESTETICOS Y TECNICAS DE SPA" $matches[1]
}

# 9. Cuidador en Atención Integral en Salud
if ($diplomados -match "CUIDADOR EN ATENCION INTEGRAL EN SALUD(.*?)DIPLOMADO") {
    Create-PDF "cuidador-salud-integral.pdf" "CUIDADOR EN ATENCION INTEGRAL EN SALUD" $matches[1]
}

# 10. Atención Prehospitalaria (APH)
if ($diplomados -match "ATENCION PREHOSPITALARIA - APH(.*?)DIPLOMADO") {
    Create-PDF "atencion-prehospitalaria.pdf" "ATENCION PREHOSPITALARIA (APH)" $matches[1]
}

Write-Host "Finalizado."
