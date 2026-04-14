<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Q10Service
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.q10.url', env('Q10_API_URL', 'https://api.q10.com/v1/'));
        $this->apiKey = config('services.q10.key', env('Q10_API_KEY'));
    }

    /**
     * Enviar una pre-inscripción a Q10
     */
    public function createPreInscription(array $data)
    {
        if (!$this->apiKey) {
            Log::warning('Q10: API Key no configurada. Saltando envío.');
            return null;
        }

        try {
            // Mapeo genérico de campos de Laravel a Q10
            // Nota: Estos campos deben ajustarse según la documentación específica de la versión de Q10
            $payload = [
                'nombres' => $data['nombre'] ?? '',
                'apellidos' => $data['apellido'] ?? '',
                'numeroDocumento' => $data['documento'] ?? '',
                'correoElectronico' => $data['email'] ?? '',
                'celular' => $data['telefono'] ?? '',
                'fechaNacimiento' => $data['fecha_nacimiento'] ?? '',
                'nombrePrograma' => $data['curso'] ?? '',
                'comentarios' => "Inscripción desde Sitio Web. Horario: " . ($data['horario'] ?? 'No especificado'),
            ];

            Log::info('Q10: Intentando enviar pre-inscripción', ['payload' => $payload]);

            $response = Http::withHeaders([
                'Api-Key' => $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . 'preinscripciones', $payload);

            if ($response->successful()) {
                Log::info('Q10: Pre-inscripción creada exitosamente', ['response' => $response->json()]);
                return $response->json();
            }

            Log::error('Q10: Error al crear pre-inscripción', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            return false;

        } catch (\Exception $e) {
            Log::critical('Q10: Excepción durante el envío', ['message' => $e->getMessage()]);
            return false;
        }
    }
}
