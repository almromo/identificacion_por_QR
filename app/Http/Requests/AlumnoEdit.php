<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoEdit extends FormRequest
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
          'matricula' => 'required|max:20|unique:alumnos,matricula,'.$this->matricula.',matricula',
          'nombre' => 'required|max:50',
          'apellido_paterno' => 'required|max:50',
          'apellido_materno' => 'required|max:50',
      ];
    }
}
