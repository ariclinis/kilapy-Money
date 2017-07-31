<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dadoscomunsvalidacao extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'nome' => 'required|max:255',
             'data_nasc' => 'required',
             'n_bi' =>'required',
             'nif' => 'required'
             'telefone' =>'required',
             'fax' => 'required',
         ];
    }
}
