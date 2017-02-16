<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
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
            'cedula' => 'min:8|max:9|unique:Estudiante,id_estudiante|required',
            'nombres' => 'min:5|max:20|required',
            'apellidos' => 'min:5|max:20|required',
            'nacimiento' => 'required',
            'fecha_inscripcion' => 'required'
        ];
    }
}
