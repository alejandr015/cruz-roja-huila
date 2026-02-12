<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donacion;
use Illuminate\Support\Facades\Validator;

class DonacionController extends Controller
{
    /**
     * Mostrar formulario de donaciones
     */
    public function index()
    {
        return view('donar');
    }

    /**
     * Procesar una donación
     */
    public function realizar(Request $request)
    {
        // Validar datos
        $validator = Validator::make($request->all(), [
            'nombre_donante' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            'tipo_donacion' => 'required|in:Monetaria,Especie',
            'monto' => 'required_if:tipo_donacion,Monetaria|nullable|numeric|min:1000',
            'descripcion' => 'required_if:tipo_donacion,Especie|nullable|string',
            'metodo_pago' => 'required_if:tipo_donacion,Monetaria|nullable|string',
            'comprobante' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ], [
            'nombre_donante.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'El correo electrónico debe ser válido',
            'tipo_donacion.required' => 'Debe seleccionar el tipo de donación',
            'monto.required_if' => 'El monto es obligatorio para donaciones monetarias',
            'monto.min' => 'El monto mínimo es de $1,000 COP',
            'descripcion.required_if' => 'La descripción es obligatoria para donaciones en especie',
            'metodo_pago.required_if' => 'Debe seleccionar un método de pago',
            'comprobante.mimes' => 'El comprobante debe ser JPG, PNG o PDF',
            'comprobante.max' => 'El comprobante no debe pesar más de 2MB',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Por favor, corrige los errores en el formulario.');
        }

        try {
            $donacion = new Donacion();
            $donacion->nombre_donante = $request->nombre_donante;
            $donacion->email = $request->email;
            $donacion->telefono = $request->telefono;
            $donacion->tipo_donacion = $request->tipo_donacion;
            
            if ($request->tipo_donacion == 'Monetaria') {
                $donacion->monto = $request->monto;
                $donacion->metodo_pago = $request->metodo_pago;
            } else {
                $donacion->descripcion = $request->descripcion;
            }

            // Subir comprobante si existe
            if ($request->hasFile('comprobante')) {
                $file = $request->file('comprobante');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('comprobantes', $filename, 'public');
                $donacion->comprobante = $path;
            }

            $donacion->save();

            // Enviar email de confirmación (opcional)
            // Mail::to($donacion->email)->send(new DonacionConfirmacion($donacion));

            return redirect()
                ->route('donar')
                ->with('success', '¡Gracias por tu donación! Hemos recibido tu información correctamente.');

        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Ocurrió un error al procesar tu donación. Por favor, intenta nuevamente.');
        }
    }
}