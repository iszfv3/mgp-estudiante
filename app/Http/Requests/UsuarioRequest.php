<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula' => 'min:4|max:9|unique:Persona,cedula_Persona|required',
            'nombres' => 'min:4|max:20|required',
            'apellidos' => 'min:4|max:20|required',
            'password' => 'min:4|max:20|required',
            'nacimiento' => 'required',
            'telefono.*' => 'min:11|max:16|unique:Telefono,numero_Telefono|required'
        ];
    }
}
