$baseDir = "public\docs\planes-estudio"
$individualDir = "$baseDir\individual"

if (-not (Test-Path $individualDir)) { New-Item -ItemType Directory -Path $individualDir | Out-Null }

# Use BOM-less UTF-8 to avoid browser encoding issues
$utf8NoBom = New-Object System.Text.UTF8Encoding($false)

function Write-HTML($path, $content) {
    [System.IO.File]::WriteAllText($path, $content, $utf8NoBom)
}

function Build-HtmlList($text) {
    if (-not $text) { return "" }
    # Split on common bullet-like patterns: colon-ending phrases, numbered items, or sentences
    $lines = $text -split "(?<=[:.])\s+(?=[A-Z*])" | Where-Object { $_.Trim().Length -gt 8 }
    if ($lines.Count -gt 3) {
        $items = ($lines | ForEach-Object { "<li>" + $_.Trim().TrimStart('*').Trim() + "</li>" }) -join "`n            "
        return "<ul>`n            $items`n            </ul>"
    }
    return "<p>" + $text.Trim() + "</p>"
}

function Create-Plan($title, $subtitle, $duration, $schedule, $modality, $profile, $content, $outFile) {
    $profileHtml = Build-HtmlList $profile
    $contentHtml = Build-HtmlList $content

    $html = @"
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>$title - Cruz Roja Colombiana</title>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root { --red: #ED1C24; --dark: #111827; --muted: #6B7280; --bg: #F9FAFB; --border: #E5E7EB; }
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: 'Outfit', sans-serif; background: var(--bg); color: var(--dark); line-height: 1.7; padding: 40px 20px; }
  .card { background: #fff; max-width: 860px; margin: 0 auto; padding: 64px 80px; box-shadow: 0 2px 24px rgba(0,0,0,0.07); border-radius: 10px; }
  header { display: flex; justify-content: space-between; align-items: flex-start; padding-bottom: 28px; border-bottom: 2px solid var(--red); margin-bottom: 44px; }
  .logo { height: 48px; object-fit: contain; }
  .brand p { font-size: 0.78rem; color: var(--muted); text-align: right; margin: 0; }
  .brand strong { display: block; font-size: 0.88rem; color: var(--red); text-transform: uppercase; letter-spacing: 0.08em; }
  h1 { font-size: 2.4rem; font-weight: 700; letter-spacing: -0.02em; margin-bottom: 6px; }
  .subtitle { font-size: 1rem; color: var(--muted); margin-bottom: 36px; }
  .meta { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 44px; padding: 22px 28px; background: var(--bg); border: 1px solid var(--border); border-radius: 8px; }
  .meta-item label { display: block; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--red); margin-bottom: 5px; }
  .meta-item span { font-size: 0.95rem; font-weight: 500; color: var(--dark); }
  section { margin-bottom: 42px; }
  h3 { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; color: var(--red); padding-left: 14px; border-left: 3px solid var(--red); margin-bottom: 18px; }
  p { color: #374151; font-size: 1rem; margin-bottom: 12px; }
  ul { list-style: none; }
  li { color: #374151; font-size: 0.98rem; padding: 6px 0 6px 22px; position: relative; border-bottom: 1px solid var(--border); }
  li:last-child { border-bottom: none; }
  li::before { content: ''; position: absolute; left: 0; top: 50%; transform: translateY(-50%); width: 6px; height: 6px; border-radius: 50%; background: var(--red); }
  footer { margin-top: 56px; padding-top: 24px; border-top: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; }
  .footer-legal { font-size: 0.75rem; color: var(--muted); }
  .footer-copy { font-size: 0.75rem; color: var(--muted); }
  .btn-print { position: fixed; bottom: 28px; right: 28px; background: var(--red); color: #fff; border: none; padding: 12px 24px; border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 0.85rem; font-weight: 600; cursor: pointer; box-shadow: 0 4px 16px rgba(237,28,36,0.35); letter-spacing: 0.04em; }
  @media print { body { background: #fff; padding: 0; } .card { box-shadow: none; padding: 30px; } .btn-print { display: none; } }
  @media (max-width: 640px) { .card { padding: 32px 24px; } h1 { font-size: 1.8rem; } .meta { grid-template-columns: 1fr; } }
</style>
</head>
<body>
<button class="btn-print" onclick="window.print()">Imprimir / Guardar PDF</button>
<div class="card">
  <header>
    <img src="/img/cruz-roja-logo.png" alt="Cruz Roja Colombiana" class="logo">
    <div class="brand">
      <strong>Cruz Roja Colombiana</strong>
      <p>Seccional Huila</p>
    </div>
  </header>

  <h1>$title</h1>
  <p class="subtitle">$subtitle</p>

  <div class="meta">
    <div class="meta-item"><label>Duracion</label><span>$duration</span></div>
    <div class="meta-item"><label>Horarios</label><span>$schedule</span></div>
    <div class="meta-item"><label>Modalidad</label><span>$modality</span></div>
  </div>

  <section>
    <h3>Perfil del Programa</h3>
    $profileHtml
  </section>

  <section>
    <h3>Contenido del Programa</h3>
    $contentHtml
  </section>

  <footer>
    <span class="footer-legal">La informacion puede estar sujeta a cambios segun normatividad vigente.</span>
    <span class="footer-copy">&copy; 2026 Cruz Roja Colombiana &mdash; Seccional Huila</span>
  </footer>
</div>
</body>
</html>
"@
    Write-HTML "$individualDir\$outFile" $html
    Write-Host "OK: $outFile"
}

# ── Lectura de archivos fuente ──────────────────────────────────────────────
$tecTxt = Get-Content "$baseDir\tecnicos.txt"  -Raw -Encoding UTF8
$dipTxt = Get-Content "$baseDir\diplomados.txt" -Raw -Encoding UTF8
$belTxt = Get-Content "$baseDir\belleza.txt"   -Raw -Encoding UTF8

# Helper: extraer entre dos marcas
function Get-Between($src, $from, $to) {
    $pat = if ($to) { "(?si)(?<=$([regex]::Escape($from))).*?(?=$([regex]::Escape($to)))" } `
           else      { "(?si)(?<=$([regex]::Escape($from))).*" }
    if ($src -match $pat) { return $matches[0].Trim() }
    return ""
}

# Helper: limpiar bloque de texto
function Clean($t) {
    $t = $t -replace "\s+", " "
    $t = $t -replace "^[^a-z]{0,80}", ""   # quitar mayusculas iniciales sueltas
    $t = $t -creplace "([a-z])([A-Z])", '$1 $2'
    $t = $t -creplace "(\))([A-Z])", '$1 $2'
    return $t.Trim()
}

# ── TECNICOS ────────────────────────────────────────────────────────────────

$b = Get-Between $tecTxt "BELLEZA INTEGRAL" "BARBERIA"
Create-Plan `
  "Tecnico en Belleza Integral" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Tres ciclos academicos (aprox. 18 meses)" `
  "Lunes a viernes 8:00-11:40 am | Viernes 1:00-5:30 pm y Sabado 8:00-4:30 pm" `
  "Presencial" `
  "Se forman para desempenarse en salones de belleza, spas o establecer su propio negocio. Su formacion les permite adaptarse a las demandas del sector y ofrecer servicios de alta calidad." `
  "Tecnicas de Manicure y pedicure: preparacion de una natural, gel, acrilico, decoraciones. Tecnicas de Maquillaje: preparacion de la piel, bases, contorno, maquillaje de dia y noche, diseno de cejas. Tecnicas de corte de cabello para hombres y mujeres. Coloracion capilar: color basico, balayage, californianas, babylight, bronde. Peinados para diversas ocasiones. Diagnosticos y tratamientos capilares. Ondulacion y alisado permanente con queratina. Peinados infantiles y trenzados. Asesoria integral de imagen personal. Atencion al cliente y protocolos de bioseguridad. Primeros auxilios." `
  "belleza-integral.html"

$b = Get-Between $tecTxt "BARBERIA" "AUXILIAR EN ENFERMERIA"
Create-Plan `
  "Tecnico en Barberia" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Dos ciclos academicos (aprox. 12 meses)" `
  "Lunes a viernes 8:00-11:40 am | Viernes 1:00-5:30 pm y Sabado 8:00-4:30 pm" `
  "Presencial" `
  "Capacita para desempenarse como barbero, estilista o asesor de imagen masculina y femenina. Se incluye normativas de bioseguridad, atencion al cliente y gestion de negocios." `
  "Corte de cabello masculino: maquina, tijera sobre peine, navaja, desvanecidos clasicos y modernos. Corte femenino: recto, capas, desfilado, entresacado. Coloracion capilar avanzada. Peinados versatiles y para ocasiones especiales. Diseno, contorno y afeitado de barba y bigote. Diagnosticos y tratamientos capilares. Keratina y alisado permanente. Asesoria de imagen personal. Atencion al cliente. Bioseguridad. Primeros auxilios. Practica laboral en barberias." `
  "barberia.html"

$b = Get-Between $tecTxt "AUXILIAR EN ENFERMERIA" "CUIDADOR ADULTO"
Create-Plan `
  "Tecnico Auxiliar de Enfermeria" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Tres ciclos academicos (aprox. 18 meses)" `
  "Lunes a viernes 7:00-11:40 am | Viernes 1:00-5:30 pm y Sabado 7:00-4:30 pm" `
  "Presencial" `
  "Un auxiliar de enfermeria proporciona cuidados basicos a los pacientes bajo supervision de enfermeros y medicos. Participa en actividades de promocion y prevencion. Su rol es clave en clinicas, hospitales, centros de atencion y hogares geriatricos." `
  "Cuidado personal del paciente (bano, vestuario, alimentacion). Medicion de signos vitales. Movilizacion de pacientes. Control y administracion de medicamentos. Documentacion y reportes clinicos. Asistencia en procedimientos medicos. Mantenimiento de higiene y seguridad. Atencion integral al nino, adolescente y adulto mayor. Practicas en hospitales, consulta externa, urgencias y hogares geriatricos." `
  "auxiliar-enfermeria.html"

$b = Get-Between $tecTxt "CUIDADOR ADULTO MAYOR" "ASISTENTE DE MARKETING"
Create-Plan `
  "Tecnico Cuidador de Adulto Mayor" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Dos ciclos academicos (aprox. 12 meses)" `
  "Viernes 1:00-5:30 pm y Sabado 7:00-5:00 pm" `
  "Presencial" `
  "Forma recurso humano con competencias para brindar apoyo fisico, emocional y tecnico a personas con dependencia, facilitando actividades cotidianas y promoviendo su bienestar en el hogar o entorno familiar." `
  "Atencion y apoyo a pacientes segun planes de tratamiento. Soporte al personal medico (terapia respiratoria, compresas, remocion de suturas). Toma y registro de signos vitales. Cuidado personal (higiene, alimentacion, vestuario, movilidad). Higiene del entorno y esterilizacion. Tecnicas de alivio del dolor no farmacologico (masajes). Acompanamiento a consultas medicas y actividades recreativas. Habilidades comunicativas y apoyo emocional." `
  "cuidador-adulto-mayor.html"

$b = Get-Between $tecTxt "ASISTENTE DE MARKETING Y VENTAS" "SASTRE DE"
Create-Plan `
  "Tecnico Asistente de Marketing y Ventas" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Dos ciclos academicos (aprox. 12 meses)" `
  "Sabados 8:00-11:40 am / 1:00-4:30 pm" `
  "Presencial" `
  "Forma tecnicos capacitados en las diversas areas del marketing digital y la gestion de redes sociales, utilizando estrategias y herramientas digitales para promocionar productos, servicios o marcas." `
  "Investigacion y analisis de mercados: segmentacion, tendencias y comportamiento del consumidor. Gestion de comunicacion y relaciones comerciales con clientes. Configuracion y mantenimiento de sitios web y redes sociales. Creacion de contenido digital y piezas graficas. Medicion y optimizacion de estrategias de marketing digital (SEO, SEM). Soporte a la operacion comercial y atencion post-venta." `
  "asistente-marketing-ventas.html"

$b = Get-Between $tecTxt "SASTRE DE" "AUXILIAR EN FARMACIA"
Create-Plan `
  "Tecnico Sastre de Confeccion sobre Medida" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Dos ciclos academicos (aprox. 12 meses)" `
  "Sabados 8:00-11:40 am / 1:00-4:30 pm" `
  "Presencial" `
  "Formacion tecnica centrada en la construccion de autonomia para garantizar la calidad de la confeccion, utilizando metodos para el trazo y elaboracion de moldes acordes al cliente, enfocado en prendas femeninas y masculinas con tecnicas de alta precision." `
  "Patronaje y corte: creacion de moldes precisos. Toma de medidas corporales. Ajustes y modificaciones para lograr la silueta ideal. Uso de maquinas de coser industriales. Seleccion de telas y materiales. Confeccion de prendas femeninas y masculinas. Desarrollo de modelos en clase." `
  "sastreria.html"

$b = Get-Between $tecTxt "AUXILIAR EN FARMACIA" ""
Create-Plan `
  "Tecnico Auxiliar en Farmacia" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "Tres ciclos academicos (aprox. 18 meses)" `
  "Viernes 1:00-5:30 pm y Sabado 7:00-5:00 pm" `
  "Presencial" `
  "Forma talento humano con habilidades para ejecutar la recepcion, almacenamiento, dispensacion y distribucion de medicamentos en farmacias, aplicando las disposiciones legales vigentes. Campo laboral: hospitales publicos y privados, farmacias, tiendas naturistas, laboratorios farmaceuticos." `
  "Normativa del Sistema General de Seguridad Social en Salud (SGSSS). Atencion al cliente interno y externo. Recepcion, almacenamiento y dispensacion de medicamentos. Tecnica aseptica y prevencion de infecciones. Entrega de medicamentos segun prescripcion medica. Registro y actualizacion del sistema de informacion de la farmacia. Aplicacion y vigilancia de medicamentos e inmunobiologicos. Primer respondiente y atencion en emergencias. Verificacion de ingresos y egresos de productos farmaceuticos." `
  "auxiliar-farmacia.html"

# ── DIPLOMADOS ──────────────────────────────────────────────────────────────

Create-Plan `
  "Diplomado: Cuidador en Atencion Integral en Salud" `
  "Diplomado | Cruz Roja Colombiana Seccional Huila" `
  "120 horas (teorico-practicas)" `
  "Presencial" `
  "Presencial" `
  "Forma cuidadores con los conocimientos, habilidades y actitudes necesarias para brindar atencion integral a personas en situacion de dependencia, contribuyendo a mejorar su calidad de vida en entornos domiciliarios, hospitalarios, institucionales o comunitarios." `
  "Introduccion al rol del cuidador. Anatomia y fisiologia basica. Higiene, confort y movilidad del paciente. Alimentacion y nutricion. Administracion de medicamentos segun normativa. Primeros auxilios y atencion en emergencias. Comunicacion y relaciones interpersonales. Salud mental y manejo emocional del cuidador. Normatividad en salud y derechos del paciente. Etica y humanizacion del cuidado." `
  "cuidador-salud-integral.html"

Create-Plan `
  "Diplomado: Atencion Prehospitalaria (APH)" `
  "Diplomado | Cruz Roja Colombiana Seccional Huila" `
  "120 horas (teorico-practicas)" `
  "Presencial y/o Virtual" `
  "Presencial / Virtual" `
  "Brinda formacion academica integral a nivel prehospitalario en situaciones de emergencias medicas, traumaticas y de desastres para desempenarse en actividades de salvamento, reanimacion, soporte y traslado de victimas a centros hospitalarios." `
  "Modulo 1: cinematica del trauma. Modulo 2: extraccion vehicular. Modulo 3: actuacion en situaciones de urgencia. Modulo 4: primeros auxilios. Modulo 5: transporte de lesionados. Modulo 6: atencion a pacientes politraumatizados. Modulo 7: emergencias cardiorespiratorias." `
  "atencion-prehospitalaria.html"

# Also generate the Tecnico version (linked from tecnicos-laborales.blade.php)
Create-Plan `
  "Tecnico en Atencion Prehospitalaria" `
  "Programa Tecnico | Cruz Roja Colombiana Seccional Huila" `
  "120 horas (teorico-practicas)" `
  "Presencial y/o Virtual" `
  "Presencial / Virtual" `
  "Brinda formacion academica integral a nivel prehospitalario en situaciones de emergencias medicas, traumaticas y de desastres para desempenarse en actividades de salvamento, reanimacion, soporte y traslado de victimas a centros hospitalarios." `
  "Modulo 1: cinematica del trauma. Modulo 2: extraccion vehicular. Modulo 3: actuacion en situaciones de urgencia. Modulo 4: primeros auxilios. Modulo 5: transporte de lesionados. Modulo 6: atencion a pacientes politraumatizados. Modulo 7: emergencias cardiorespiratorias." `
  "atencion-prehospitalaria-tecnico.html"

Create-Plan `
  "Diplomado: Atencion Integral en Salud al Adulto Mayor" `
  "Diplomado | Cruz Roja Colombiana Seccional Huila" `
  "160 horas (teorico-practicas)" `
  "Presencial y/o Virtual" `
  "Presencial / Virtual" `
  "Forma recurso humano con competencias para mejorar la calidad de vida de las personas mayores, abordando el bienestar fisico, mental y social desde una perspectiva integral y humanizada." `
  "Unidad 1: Normatividad actual del Ministerio de la Proteccion Social. Unidad 2: Generalidades del envejecimiento. Unidad 3: Psicologia de la vejez. Unidad 4: Biologia y fisiologia del envejecimiento. Unidad 5: Gerontologia clinica. Unidad 6: Tanatologia. Unidad 7: Deberes y derechos del adulto mayor." `
  "adulto-mayor.html"

# ── CURSOS INTENSIVOS DE BELLEZA ─────────────────────────────────────────────

Create-Plan `
  "Curso: Manicure y Pedicure" `
  "Curso Intensivo de Belleza | Cruz Roja Colombiana Seccional Huila" `
  "9 clases" `
  "Dos dias a la semana, 2:00 - 5:30 pm" `
  "Presencial" `
  "Formacion en el cuidado estetico y profesional de unas, cuticulas y piel de manos y pies. Incluye limpieza, limado, tratamiento de cuticulas, exfoliacion, hidratacion, masajes y esmaltado." `
  "Preparacion de una natural y limpieza. Aplicacion correcta de gel y semipermanente. Uso de drill y puntas para manicura. Aplicacion correcta de acrilico. Decoracion basica. Tecnica de reversa. Recubrimiento y retiro." `
  "manicure-pedicure.html"

Create-Plan `
  "Curso: Maquillaje Profesional" `
  "Curso Intensivo de Belleza | Cruz Roja Colombiana Seccional Huila" `
  "9 clases" `
  "Dos dias a la semana, 2:00 - 5:30 pm" `
  "Presencial" `
  "Capacitacion para aplicar diferentes estilos, tendencias y tecnicas personalizadas de maquillaje, realzando la belleza individual para diferentes eventos, con tecnicas duraderas y personalizadas." `
  "Preparacion de la piel. Tecnicas cosmeticas y de maquillaje. Tecnicas de fijacion. Combinacion de colores y contrastes. Correcciones y retoques. Aplicacion de bases y correctores. Contorno e iluminacion. Maquillajes en tendencia. Aplicacion de pestanas. Diseno de cejas en henna." `
  "maquillaje.html"

Create-Plan `
  "Curso: Barberia Intensivo" `
  "Curso Intensivo de Belleza | Cruz Roja Colombiana Seccional Huila" `
  "9 clases" `
  "Dos dias a la semana, 2:00 - 5:30 pm" `
  "Presencial" `
  "La barberia se especializa en el cuidado, corte, peinado y afeitado del cabello y la barba, enfocado principalmente en el estilo masculino, con tecnicas clasicas y modernas." `
  "Corte de cabello masculino: maquina, tijera sobre peine, navaja y desvanecidos. Tecnicas de coloracion capilar masculina. Diseno, contorno y afeitado de barba y bigote. Diagnosticos y tratamientos capilares. Ondulacion y alisado permanente. Protocolos de bioseguridad." `
  "barberia-curso.html"

Create-Plan `
  "Curso: Peinados Profesionales" `
  "Curso Intensivo de Belleza | Cruz Roja Colombiana Seccional Huila" `
  "9 clases" `
  "Dos dias a la semana, 2:00 - 5:30 pm" `
  "Presencial" `
  "Curso para realzar la belleza y personalidad del cliente, creando looks que se adapten a su morfologia y ocasion, dominando tecnicas y tendencias actuales con herramientas y productos profesionales." `
  "Peinados versatiles para bodas, gala, graduacion, ejecutivo. Peinados recogidos: trenzas, monos, coletas. Peinados sueltos: ondas suaves, rizos definidos. Peinados con accesorios: diademas, cintas, flores. Peinados infantiles y trenzados con accesorios." `
  "peinados.html"

Create-Plan `
  "Curso: Masajes Esteticos y Tecnicas de SPA" `
  "Curso Intensivo | Cruz Roja Colombiana Seccional Huila" `
  "12 clases" `
  "Dos dias a la semana, 2:00 - 5:30 pm" `
  "Presencial" `
  "Practica terapeutica que manipula los tejidos blandos para reducir la tension, aliviar dolores y mejorar la circulacion. Incluye masajes relajantes, terapeuticos, de tejido profundo y tratamientos esteticos." `
  "Masajes esteticos: maniobras de masaje, reductor, levantamiento de gluteos, celulitis, parafinas. Tecnicas de SPA: spa de pies, reflexologia, bano de novia, chocoterapia, depilacion con cera." `
  "masajes-esteticos-spa.html"

Write-Host ""
Write-Host "=== Generacion completa. Todos los archivos fueron creados sin BOM. ==="
