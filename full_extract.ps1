$files = @("diplomados.docx", "tecnicos.docx", "belleza.docx")
$baseDir = "public\docs\planes-estudio"
$individualDir = "$baseDir\individual"

if (-not (Test-Path $individualDir)) { New-Item -ItemType Directory -Path $individualDir | Out-Null }

foreach ($f in $files) {
    $path = "$baseDir\$f"
    if (-not (Test-Path $path)) { continue }
    
    $zipPath = $path + ".zip"
    Copy-Item -Path $path -Destination $zipPath -Force
    $temp = "$baseDir\temp_$f"
    if (Test-Path $temp) { Remove-Item -Path $temp -Recurse -Force }
    New-Item -ItemType Directory -Path $temp | Out-Null
    
    try {
        Expand-Archive -Path $zipPath -DestinationPath $temp -Force
        $docPath = "$temp\word\document.xml"
        if (Test-Path $docPath) {
            # Create a new XML object and load the file with explicit UTF-8 handling
            $xml = New-Object System.Xml.XmlDocument
            $xml.Load($docPath)
            $text = $xml.DocumentElement.InnerText
            $outTxt = "$baseDir\" + $f.Replace(".docx", ".txt")
            # Write with UTF8 (with BOM) for consistent reading in PowerShell
            $text | Out-File -FilePath $outTxt -Encoding UTF8
            Write-Host "Extracted text from $f to $outTxt (UTF-8)"
        }
    } catch {
        Write-Host "Error processing $f : $_"
    } finally {
        if (Test-Path $temp) { Remove-Item -Path $temp -Recurse -Force }
        if (Test-Path $zipPath) { Remove-Item -Path $zipPath -Force }
    }
}
