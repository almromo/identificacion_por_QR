<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoEdit extends FormRequest
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
          'numero_serie' => 'required|max:50|unique:equipos,numero_serie,'.$this->numero_serie.',numero_serie',
          'marca_equipo' => 'required|max:75',
          'modelo_equipo' => 'required|max:75',
          'color_equipo' => 'required|max:45',
          'tipo_equipo' => 'required|max:50',
      ];
    }
}
