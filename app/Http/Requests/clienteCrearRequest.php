<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class clienteCrearRequest extends Request
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
            'nombre_cliente'=>'required',
            'apellido_cliente'=>'required',
            'cedula_cliente'=>'required|unique:cliente',
            'email_cliente'=>'required|unique:cliente|email',
            'direccion_cliente'=>'required',
            'telefono_cliente'=>'required',
            'celular_cliente'=>'required',
            'genero'=>'required',
            'activo_pasivo'=>'required',
        ];
    }
}
