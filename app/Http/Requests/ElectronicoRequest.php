<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectronicoRequest extends FormRequest
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
     * Get the validation rules that apply to the request.nullablenullablenullable
     *
     * @return array
     */
    public function rules()
    {
        return [
            //info general
            'id_dep' =>'required',
            'id_area' =>'required',
            'usuario' =>'required|string',
            'ubicacion' =>'required|string',
            'nombreEq' =>'required|string',
            'NombreCu' =>'required',
            'contraseña' =>'required|string',
            //Informacion De software
            'NombreSis' =>'required|string',
            'Tipo_sistema' =>'required|string',
            'id_dispositivo' =>'required|string',
            'id_Producto' =>'required|string',
            'Office' =>'required|string',
            'Id_Producto_Office' =>'nullable',// pueden ser nulos
            'Id_Sesion_Office' =>'nullable',// pueden ser nulos
            'Direccion_ip' =>'required',
            'Puerta_Enlace' =>'required',//puede ser nulo
            'Tipo_Red' =>'required',
            'Group' =>'required|string',
            'Estacion_id'=>'required',
            //Informacion De hardware

        ];
    }

    public function messages(){
        return[
            //info general
            'id_dep.required' =>'Este Campo Es Oblogatorio',
            'id_area.required' =>'Este Campo Es Oblogatorio',
            'usuario.required' =>'Este Campo Es Oblogatorio',
            'ubicacion.required' =>'Este Campo Es Oblogatorio',
            'nombreEq.required' =>'Este Campo Es Oblogatorio',
            'NombreCu.required' =>'Este Campo Es Oblogatorio',
            'contraseña.required' =>'Este Campo Es Oblogatorio',
            //Informacion De software
            'NombreSis.required' =>'Este Campo Es Oblogatorio',
            'Tipo_sistema.required' =>'Este Campo Es Oblogatorio',
            'id_dispositivo.required' =>'Este Campo Es Oblogatorio',
            'id_Producto.required' =>'Este Campo Es Oblogatorio',
            'Office.required' =>'Este Campo Es Oblogatorio',
            'Direccion_ip.required' =>'Este Campo Es Oblogatorio',
            'Puerta_Enlace.required'=>'Obligatorio Asociar Un Equipo',
            'Tipo_Red.required' =>'Este Campo Es Oblogatorio',
            'Group.required' =>'Este Campo Es Oblogatorio',
            'Estacion_id.required'=>'Obligatorio Asociar Un Equipo',

        ];
    }
}
