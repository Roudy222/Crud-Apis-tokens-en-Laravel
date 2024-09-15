<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEstablecimiento extends FormRequest
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
            //
            'nombre_establecimiento' => 'required',
            'direccion_manzana' => 'required',
            'direccion_calleprincipal' => 'required',
            'direccion_numero' => 'required',
            'direccion_transversal' => 'required',
            'direccion_referencia' => 'required',
            'nombre_administrador' => 'required',
            'telefono_contacto' => 'required|min:10|max:10',
            'email_contacto' => 'required',
            'ubicacion' => 'required',
            'ruta' => 'required',
            'provincia_id' => 'required',
            'ciudad_id' => 'required',
            'cliente_id' => 'required',
        ];
    }
}
