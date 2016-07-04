<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class tipoRegistroCrearRequest extends Request
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
        'nombre_registro' => 'required|unique:tipo_registro', 
        'descripcion_registro' => 'required',
        'activo_pasivo'=>'required',
        ];
    }
}
