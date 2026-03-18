$baseDir = "public\docs\planes-estudio"
$individualDir = "$baseDir\individual"
if (-not (Test-Path $individualDir)) { New-Item -ItemType Directory -Path $individualDir | Out-Null }

function Create-CleanPDF($name, $content) {
    # Eliminar caracteres especiales y espacios para el nombre del archivo
    $safeName = $name -replace '[^a-zA-Z0-9-]', ''
    $path = "$individualDir\$safeName.pdf"
    $fullContent = "CRUZ ROJA COLOMBIANA - SECCIONAL HUILA`nPLAN DE ESTUDIOS: $name`n`n" + $content
    $fullContent | Out-File -FilePath $path -Encoding utf8
    Write-Host "Realizado: $path"
}

# 1. DIPLOMADOS
$txtDiplomados = Get-Content "$baseDir\diplomados.txt" -Raw
$regexDiplomados = "(DIPLOMADO .*?)(?=DIPLOMADO |$)"
$matchesD = [regex]::Matches($txtDiplomados, $regexDiplomados, "Singleline")
foreach ($m in $matchesD) {
    if ($m.Value -match "CUIDADOR EN ATENCION INTEGRAL EN SALUD") {
        Create-CleanPDF "cuidador-atencion-integral-salud" $m.Value
    } elseif ($m.Value -match "ATENCION PREHOSPITALARIA - APH") {
        Create-CleanPDF "atencion-prehospitalaria" $m.Value
    }
}

# 2. TECNICOS
$txtTecnicos = Get-Content "$baseDir\tecnicos.txt" -Raw
$regexTecnicos = "(PROGRAMA .*?)(?=PROGRAMA |$)"
$matchesT = [regex]::Matches($txtTecnicos, $regexTecnicos, "Singleline")
foreach ($m in $matchesT) {
    if ($m.Value -match "BELLEZA INTEGRAL") {
        Create-CleanPDF "belleza-integral" $m.Value
    } elseif ($m.Value -match "BARBERIA") {
        Create-CleanPDF "barberia" $m.Value
    } elseif ($m.Value -match "AUXILIAR EN ENFERMERI") {
        Create-CleanPDF "auxiliar-enfermeria" $m.Value
    } elseif ($m.Value -match "CUIDADOR ADULTO MAYOR") {
        Create-CleanPDF "cuidado-adulto-mayor" $m.Value
    } elseif ($m.Value -match "ASISTENTE DE MARKETING Y VENTAS") {
        Create-CleanPDF "asistente-marketing-ventas" $m.Value
    } elseif ($m.Value -match "SASTRE DE CONFECCION SOBRE MEDID") {
        Create-CleanPDF "sastre-confeccion-sobre-medida" $m.Value
    } elseif ($m.Value -match "AUXILIAR EN FARMACI") {
        Create-CleanPDF "auxiliar-farmacia" $m.Value
    }
}

# 3. CURSOS (Masajes)
$txtBelleza = Get-Content "$baseDir\belleza.txt" -Raw
if ($txtBelleza -match "(MASAJES ESTETICOS Y TÉCNICAS DE SPA.*?)(?=BARBERIA|$)") {
    Create-CleanPDF "masajes-esteticos-tecnicas-spa" $matches[0].Value
}
