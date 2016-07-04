<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class obrasEditarRequest extends Request
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
        'autor' => 'required', 
        'titulo' => 'required',
        'fecha_publicacion' => 'date',
        'fecha_registro' => 'required',
         'proveedor_idproveedor' => 'required',
        'tipos_obras_idtipos_obras' => 'required',
        'areas_idareas' => 'required',
        'tipo_registro_id' => 'required',
        'descripcion_obra' => 'required',
        ];
    }
}
