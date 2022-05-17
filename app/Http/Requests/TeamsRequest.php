<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamsRequest extends FormRequest
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
        'id_cliente'=>'required',
        'MarcaGrua'=>'required',
        'NSGrua'=>'required',
        'MarcaPolipasto'=>'required',
        'ModeloPoli'=>'required',
        'NSPoli'=>'required',
        'Claro'=>'required',
        'Altura'=>'required',
        'Capacidad'=>'required',
        'Voltaje'=>'required',
        'Recorrido'=>'required',
        'TipoAlim'=>'required',
        'UbicacionAli'=>'required',
        'Area'=>'required',
        ];
    }

    public function messages(){
        return[
        'id_cliente'=>'Este Campo Es Oblogatorio',
        'MarcaGrua.required'=>'Este Campo Es Oblogatorio',
        'NSGrua.required'=>'Este Campo Es Oblogatorio',
        'MarcaPolipasto.required'=>'Este Campo Es Oblogatorio',
        'ModeloPoli.required'=> 'Es Campo Es Oblogatorio',
        'NSPoli.required'=> 'Es Campo Es Oblogatorio',
        'Claro.required'=> 'Es Campo Es Oblogatorio',
        'Altura.required'=> 'Es Campo Es Oblogatorio',
        'Capacidad.required'=> 'Es Campo Es Oblogatorio',
        'Voltaje.required'=> 'Es Campo Es Oblogatorio',
        'Recorrido.required'=> 'Es Campo Es Oblogatorio',
        'TipoAlim.required'=> 'Es Campo Es Oblogatorio',
        'UbicacionAli.required'=> 'Es Campo Es Oblogatorio',
        'Area.required'=>'Este Campo Es Oblogatorio',
        ];
    }
}
