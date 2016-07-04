<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class tipoObrasCrearRequest extends Request
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
        'nombre_tipos_obras' => 'required|unique:tipos_obras', 
        'descripcion_tipos_obras' => 'required',
        'activo_pasivo'=>'required',
        ];
    }
}
