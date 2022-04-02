<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationCpu extends FormRequest
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
        'Marca_cpu'=>'required',
        'Modelo_cpu'=>'required',
        'Factor_cpu'=>'required',
        'Serie_cpu'=>'required',
        'Adquicision_cpu'=>'nullable',
        'Estado_cpu'=> 'required',
        'Procesador'=> 'required',
        'Ram'=> 'required',
        'Distribucion'=> 'required',
        'Modelo_ram'=> 'required',
        'Slots_disponibles'=> 'required',
        'Unidad_primaria'=> 'required',
        'Tamaño_primario'=> 'required',
        'Factor_primario'=> 'required',
        'Unidad_secundaria'=>'nullable',
        'Tamaño_secundario'=>'nullable',
        'Factor_secundario'=>'nullable',
        'Tarjeta_grafica'=>'required',
        'Marca_tarjeta'=> 'nullable',
        'Modelo_tarjeta'=> 'nullable',
        'Serie_tarjeta'=> 'nullable',
        'Tamaño_tarjeta'=> 'nullable',
        'Estatus_cpu'=>'required',
        ];
    }

    public function messages(){
        return[
        'Marca_cpu.required'=>'Este Campo Es Oblogatorio',
        'Modelo_cpu.required'=>'Este Campo Es Oblogatorio',
        'Factor_cpu.required'=>'Este Campo Es Oblogatorio',
        'Serie_cpu.required'=>'Este Campo Es Oblogatorio',
        'Estado_cpu.required'=> 'Es Campo Es Oblogatorio',
        'Procesador.required'=> 'Es Campo Es Oblogatorio',
        'Ram.required'=> 'Es Campo Es Oblogatorio',
        'Distribucion.required'=> 'Es Campo Es Oblogatorio',
        'Modelo_ram.required'=> 'Es Campo Es Oblogatorio',
        'Slots_disponibles.required'=> 'Es Campo Es Oblogatorio',
        'Unidad_primaria.required'=> 'Es Campo Es Oblogatorio',
        'Tamaño_primario.required'=> 'Es Campo Es Oblogatorio',
        'Factor_primario.required'=> 'Es Campo Es Oblogatorio',
        'Tarjeta_grafica.required'=>'Este Campo Es Oblogatorio',
        'Estatus_cpu.required'=>'Este Campo Es Oblogatorio',
        ];
    }
}//fin de la clase
