<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$count = \App\Models\Noticia::count();
echo "Total noticias: $count\n";
foreach(\App\Models\Noticia::all() as $n) {
    echo "ID: {$n->id}, Imagen: {$n->imagen}\n";
    $n->imagen = 'reales/real-' . rand(1, 55) . '.jpeg';
    $n->save();
}
