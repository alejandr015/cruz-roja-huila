$baseDir = "public\docs\planes-estudio"
$individualDir = "$baseDir\individual"
if (-not (Test-Path $individualDir)) { New-Item -ItemType Directory -Path $individualDir | Out-Null }

# Función para crear el archivo PDF (texto plano con extensión .pdf)
function Create-PDF($filename, $title, $content) {
    $path = Join-Path $individualDir $filename
    $header = "--------------------------------------------------`r`n"
    $header += "CRUZ ROJA COLOMBIANA - SECCIONAL HUILA`r`n"
    $header += "PLAN DE ESTUDIOS: $title`r`n"
    $header += "--------------------------------------------------`r`n`r`n"
    $fullContent = $header + $content
    $fullContent | Out-File -FilePath $path -Encoding utf8
    Write-Host "Generado: $filename"
}

# Leer archivos con codificación UTF8 para evitar problemas con tildes
$tecnicosText = Get-Content (Join-Path $baseDir "tecnicos.txt") -Raw -Encoding utf8
$diplomadosText = Get-Content (Join-Path $baseDir "diplomados.txt") -Raw -Encoding utf8
$bellezaText = Get-Content (Join-Path $baseDir "belleza.txt") -Raw -Encoding utf8

# 1. Belleza Integral (Técnico)
if ($tecnicosText -match "(PROGRAMA TÃ‰CNICO BELLEZA INTEGRAL.*?)(?=PROGRAMA TÃ‰CNICO|$)") {
    Create-PDF "belleza-integral.pdf" "BELLEZA INTEGRAL" $matches[1]
} elseif ($tecnicosText -match "(PROGRAMA TECNICO BELLEZA INTEGRAL.*?)(?=PROGRAMA TECNICO|$)") {
    Create-PDF "belleza-integral.pdf" "BELLEZA INTEGRAL" $matches[1]
}

# 2. Barbería (Curso Intensivo)
if ($bellezaText -match "(BARBERIALa barberÃ­a.*?)(?=PEINADOS|$)") {
    Create-PDF "barberia.pdf" "CURSO INTENSIVO DE BARBERIA" $matches[1]
}

# 3. Auxiliar Enfermería (Técnico)
if ($tecnicosText -match "(PROGRAMA TÃ‰CNICO AUXILIAR EN ENFERMERIA.*?)(?=PROGRAMA TÃ‰CNICO|$)") {
    Create-PDF "auxiliar-enfermeria.pdf" "AUXILIAR EN ENFERMERIA" $matches[1]
}

# 4. Cuidado Adulto Mayor (Técnico)
if ($tecnicosText -match "(PROGRAMA TÃ‰CNICO CUIDADOR ADULTO MAYOR.*?)(?=PROGRAMA TÃ‰CNICO|$)") {
    Create-PDF "cuidado-adulto-mayor.pdf" "CUIDADOR ADULTO MAYOR" $matches[1]
}

# 5. Asistente de Marketing y Ventas (Técnico)
if ($tecnicosText -match "(PROGRAMA TÃ‰CNICO ASISTENTE DE MARKETING Y VENTAS.*?)(?=PROGRAMA TÃ‰CNICO|$)") {
    Create-PDF "asistente-marketing-ventas.pdf" "ASISTENTE DE MARKETING Y VENTAS" $matches[1]
}

# 6. Sastre de Confección sobre Medida (Técnico)
if ($tecnicosText -match "(PROGRAMA TÃ‰CNICO SASTRE DE CONFECCION SOBRE MEDIDA.*?)(?=PROGRAMA TÃ‰CNICO|$)") {
    Create-PDF "sastre-confeccion.pdf" "SASTRE DE CONFECCION SOBRE MEDIDA" $matches[1]
}

# 7. Auxiliar en Farmacia (Técnico)
if ($tecnicosText -match "(PROGRAMA TÃ‰CNICO AUXILIAR EN FARMACIA.*?)(?=PROGRAMA TÃ‰CNICO|$)") {
    Create-PDF "auxiliar-farmacia.pdf" "AUXILIAR EN FARMACIA" $matches[1]
}

# 8. Masajes Estéticos y Técnicas de SPA (Curso Intensivo)
if ($bellezaText -match "(MASAJES ESTETICOS Y TÃ‰CNICAS DE SPA.*?)(?=$|$)") {
    Create-PDF "masajes-esteticos-spa.pdf" "MASAJES ESTETICOS Y TECNICAS DE SPA" $matches[1]
}

# 9. Cuidador en Atención Integral en Salud (Diplomado)
if ($diplomadosText -match "(DIPLOMADO CUIDADOR EN ATENCION INTEGRAL EN SALUD.*?)(?=DIPLOMADO|$)") {
    Create-PDF "cuidador-salud-integral.pdf" "CUIDADOR EN ATENCION INTEGRAL EN SALUD" $matches[1]
}

# 10. Atención Prehospitalaria (APH) (Diplomado)
if ($diplomadosText -match "(DIPLOMADO DE ATENCION PREHOSPITALARIA - APH.*?)(?=DIPLOMADO|$)") {
    Create-PDF "atencion-prehospitalaria.pdf" "ATENCION PREHOSPITALARIA (APH)" $matches[1]
}

Write-Host "Finalizado."
