<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class proveedorEditarRequest extends Request
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
        'nombre_proveedor' => 'required', 
        'cedula_proveedor' => 'required',
        'direccion_proveedor' => 'required',
        'telefono_proveedor' => 'required',
        'celular_proveedor' => 'required',
        ];
    }
}
