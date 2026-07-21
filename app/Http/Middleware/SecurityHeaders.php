<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Agregar headers de seguridad a todas las respuestas
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // PROTECCIÓN CONTRA CLICKJACKING
        // Evita que tu sitio sea incrustado en iframes de otros sitios
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // PROTECCIÓN CONTRA MIME SNIFFING
        // Fuerza al navegador a respetar el tipo de contenido declarado
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // PROTECCIÓN XSS (Cross-Site Scripting)
        // Activa el filtro XSS del navegador
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // POLÍTICA DE REFERRER
        // Controla qué información se envía al hacer click en enlaces
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // POLÍTICA DE PERMISOS
        // Desactiva APIs del navegador que no necesitas (geolocalización, cámara, micrófono)
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // CONTENT SECURITY POLICY (CSP) - Básica
        // Define qué recursos puede cargar tu sitio
        $response->headers->set(
            'Content-Security-Policy',
            "default-src 'self'; " .
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://code.jquery.com; " .
            "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.googleapis.com; " .
            "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; " .
            "img-src 'self' data: https:; " .
            "connect-src 'self'; " .
            "frame-src 'self' https://www.google.com https://maps.google.com; " .
            "frame-ancestors 'self';"
        );

        // HSTS (HTTP Strict Transport Security)
        // Fuerza HTTPS (solo activar cuando tengas certificado SSL en producción)
        // Comentado por ahora - descomentar cuando subas a producción con HTTPS
        // $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');

        return $response;
    }
}