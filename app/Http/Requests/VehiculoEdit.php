<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoEdit extends FormRequest
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
          'placa_vehiculo' => 'required|max:50|unique:vehiculos,placa_vehiculo,'.$this->placa_vehiculo.',placa_vehiculo',
          'marca_vehiculo' => 'required|max:75',
          'modelo_vehiculo' => 'required|max:75',
          'color_vehiculo' => 'required|max:45',
          'tipo_vehiculo' => 'required|max:50',
      ];
    }
}
