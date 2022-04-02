<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriRequest extends FormRequest
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
            'Tipo_Peri' =>'required',
            'Marca_p' =>'required',
            'Model_p' =>'required|string',
            'N_SerieP' =>'required|string',
            'Direc_Mac' =>'required|string',
            'Fecha_P' =>'required',
            'Estatus_p' =>'required|string',
            'Dep_P' =>'required|string', // Aqui Empieza Informacion de Equipo Asosiado
            'Area_P' =>'required|string',
            'Name_p' =>'required|string',
            'User_P' =>'required|string',
            'Ubicación_P' =>'required|string',
            'ubicacionP' =>'string',
        ];
    }

}
