<?php

namespace Hemeroteca\Http\Requests;

use Hemeroteca\Http\Requests\Request;

class isbnCrearRequest extends Request
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
            'codigo_isbn' => 'required|unique:obras_isbn',
        ];
    }
}
