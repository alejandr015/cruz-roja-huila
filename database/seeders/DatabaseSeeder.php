<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiar tablas
        DB::table('servicios')->truncate();
        DB::table('noticias')->truncate();
        
        // Insertar servicios
        DB::table('servicios')->insert([
            [
                'nombre' => 'Primeros Auxilios',
                'descripcion' => 'Capacitación y atención en primeros auxilios para la comunidad del Huila',
                'icono' => 'fa-kit-medical',
                'orden' => 1,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Atención de Emergencias',
                'descripcion' => 'Respuesta rápida ante emergencias y desastres naturales',
                'icono' => 'fa-truck-medical',
                'orden' => 2,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Programas Sociales',
                'descripcion' => 'Apoyo a comunidades vulnerables del departamento del Huila',
                'icono' => 'fa-hands-holding-heart',
                'orden' => 3,
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        // Insertar noticias de ejemplo
        DB::table('noticias')->insert([
            [
                'titulo' => 'Jornada de Voluntariado en Neiva',
                'contenido' => 'La Cruz Roja Colombiana Seccional Huila invita a toda la comunidad a participar en nuestra próxima jornada de voluntariado que se realizará el próximo sábado en las instalaciones de nuestra sede principal. Únete a nosotros y sé parte del cambio.',
                'categoria' => 'evento',
                'activo' => true,
                'fecha_publicacion' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Nueva Convocatoria: Curso de Primeros Auxilios Básicos',
                'contenido' => 'Abrimos inscripciones para nuestro curso gratuito de primeros auxilios básicos. Aprende técnicas que pueden salvar vidas en situaciones de emergencia. Cupos limitados. El curso tendrá una duración de 20 horas distribuidas en 4 sábados consecutivos.',
                'categoria' => 'campana',
                'activo' => true,
                'fecha_publicacion' => now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Cruz Roja Huila Responde ante Emergencia en Zona Rural',
                'contenido' => 'Nuestro equipo de respuesta rápida atendió una emergencia en la zona rural del municipio de Pitalito. Gracias al trabajo coordinado de nuestros voluntarios, se logró brindar atención médica a 15 familias afectadas por las fuertes lluvias.',
                'categoria' => 'noticia',
                'activo' => true,
                'fecha_publicacion' => now()->subDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Voluntarios Cruz Roja Reciben Reconocimiento Departamental',
                'contenido' => 'La Gobernación del Huila reconoció la labor incansable de nuestros voluntarios durante el 2025. Este reconocimiento destaca el compromiso y dedicación de más de 300 voluntarios activos en todo el departamento.',
                'categoria' => 'noticia',
                'activo' => true,
                'fecha_publicacion' => now()->subWeek(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Capacitación Empresarial en Seguridad y Salud en el Trabajo',
                'contenido' => 'Ofrecemos programas de capacitación empresarial en primeros auxilios, manejo de extintores y brigadas de emergencia. Contacta con nosotros para conocer nuestros paquetes corporativos diseñados especialmente para tu empresa.',
                'categoria' => 'campana',
                'activo' => true,
                'fecha_publicacion' => now()->subDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        // Crear usuario admin (si tienes tabla users)
        if (Schema::hasTable('users')) {
            DB::table('users')->insert([
                'name' => 'Administrador Cruz Roja',
                'email' => 'admin@cruzrojahuila.org',
                'password' => Hash::make('admin123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        $this->command->info('✅ Base de datos poblada exitosamente!');
    }
}
