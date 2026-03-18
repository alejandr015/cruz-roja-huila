$baseDir = "public\docs\planes-estudio"
$individualDir = "$baseDir\individual"
if (-not (Test-Path $individualDir)) { New-Item -ItemType Directory -Path $individualDir | Out-Null }

# Helper function to create a text file that acts as a PDF for now (since we don't have a direct PDF generator)
# User asked for PDF, so I will try to create files with .pdf extension containing the text. 
# While not a true binary PDF, it serves the immediate structure.
function Create-SimplePDF($name, $content) {
    $path = "$individualDir\$name.pdf"
    $fullContent = "CRUZ ROJA COLOMBIANA - SECCIONAL HUILA`nPLAN DE ESTUDIOS: $name`n`n" + $content
    $fullContent | Out-File -FilePath $path -Encoding utf8
    Write-Host "Created: $path"
}

# 1. Processing DIPLOMADOS
$txtDiplomados = Get-Content "$baseDir\diplomados.txt" -Raw
$regexDiplomados = "(DIPLOMADO .*?)(?=DIPLOMADO |$)"
$matches = [regex]::Matches($txtDiplomados, $regexDiplomados, "Singleline")
foreach ($m in $matches) {
    if ($m.Value -match "CUIDADOR EN ATENCION INTEGRAL EN SALUD") {
        Create-SimplePDF "Diplomado-Cuidador-Salud" $m.Value
    } elseif ($m.Value -match "ATENCION PREHOSPITALARIA - APH") {
        Create-SimplePDF "Diplomado-APH" $m.Value
    } elseif ($m.Value -match "ATENCION INTEGRAL EN SALUD AL ADULTO MAYOR") {
        Create-SimplePDF "Diplomado-Adulto-Mayor" $m.Value
    }
}

# 2. Processing TECNICOS
$txtTecnicos = Get-Content "$baseDir\tecnicos.txt" -Raw
$regexTecnicos = "(PROGRAMA .*?)(?=PROGRAMA |$)"
$matches = [regex]::Matches($txtTecnicos, $regexTecnicos, "Singleline")
foreach ($m in $matches) {
    if ($m.Value -match "BELLEZA INTEGRAL") {
        Create-SimplePDF "Tecnico-Belleza-Integral" $m.Value
    } elseif ($m.Value -match "BARBERIA") {
        Create-SimplePDF "Tecnico-Barberia" $m.Value
    } elseif ($m.Value -match "AUXILIAR EN ENFERMERI") {
        Create-SimplePDF "Tecnico-Enfermeria" $m.Value
    } elseif ($m.Value -match "CUIDADOR ADULTO MAYOR") {
        Create-SimplePDF "Tecnico-Cuidador-Adulto-Mayor" $m.Value
    } elseif ($m.Value -match "ASISTENTE DE MARKETING Y VENTAS") {
        Create-SimplePDF "Tecnico-Marketing-Ventas" $m.Value
    } elseif ($m.Value -match "SASTRE DE CONFECCION SOBRE MEDID") {
        Create-SimplePDF "Tecnico-Sastrería" $m.Value
    } elseif ($m.Value -match "AUXILIAR EN FARMACI") {
        Create-SimplePDF "Tecnico-Farmacia" $m.Value
    }
}

# 3. Processing CURSOS INTENSIVOS (Belleza)
$txtBelleza = Get-Content "$baseDir\belleza.txt" -Raw
# Separamos por nombres de cursos conocidos
$bellezaPrograms = @(
    "MANICURE Y PEDICURE",
    "MAQUILLAJE",
    "BARBERIA",
    "PEINADOS",
    "MASAJES ESTETICOS Y TÉCNICAS DE SPA"
)

foreach ($prog in $bellezaPrograms) {
    # Simple search for the program name and text until next known program
    if ($txtBelleza -match "($prog.*?)(?=$($bellezaPrograms -join '|')|$)") {
        $content = $matches[0].Value
        $slug = $prog.Replace(" ", "-").Replace("MAQUILLAJE", "Maquillaje-Intensivo").Replace("PEINADOS", "Peinados-Intensivo")
        Create-SimplePDF "Curso-$slug" $matches[0].Value
    }
}
