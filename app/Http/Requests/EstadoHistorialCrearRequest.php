<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class EstadoHistorialCrearRequest extends Request
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
        'nombre_estado_historial' => 'required|unique:estado_obras', 
        'descripcion_estado_historial' => 'required',
        'activo_pasivo' => 'required',
        ];
    }
}
