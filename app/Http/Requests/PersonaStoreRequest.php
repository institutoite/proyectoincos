<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaStoreRequest extends FormRequest
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
            "nombre" => 'required|max:50|unique_with:personas,apellidop,apellidom',
            "apellidop" =>'required|string|max:25',
            "apellidom" => 'nullable|string|max:25',
            "fechanacimiento" =>'required|date',
            "direccion" => 'required|string|max:120',
            "carnet" => 'nullable|string',
            "expedido" => 'nullable|string',
            "genero" => 'required|string',
            
            "foto" => 'nullable|file',
            "papel" =>'required|string',
            "telefono" => 'max:8',
            
        ];
    }
}
