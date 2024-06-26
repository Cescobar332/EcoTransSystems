<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistorialServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'fecha' => 'required',
			'hora' => 'required',
			'rol' => 'required|string',
			'ubicacion_destino' => 'required|string',
			'ubicacion_llegada' => 'required|string',
			'peso_paquete' => 'required',
			'valor_paquete' => 'required',
        ];
    }
}
