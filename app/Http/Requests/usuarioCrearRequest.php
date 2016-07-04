<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class usuarioCrearRequest extends Request
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
            'nombre'=>'required',
            'Apellido'=>'required',
            'username'=>'required|unique:usuarios',
            'password'=>'required',
            'email'=>'required|unique:usuarios|email',
            'direccion'=>'required',
            'cedula'=>'required|unique:usuarios',
            'tipo_usuario_idtipo_usuario'=>'required',
            'activo_pasivo'=>'required',
        ];
    }
}
