<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturacionRequest extends FormRequest
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
            'no_factura'=>'required',
            'id_cliente'=>'required',
            'fecha'=>'required',
            'id_producto'=>'required',
            'precio'=>'required',
            'cantidad'=>'required',
            'total'=>'required',
        ];
    }
}
