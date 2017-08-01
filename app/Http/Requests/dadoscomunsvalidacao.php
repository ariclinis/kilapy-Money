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
             'nif' => 'required',
             'telefone' =>'required',
             'fax' => 'required',
         ];
    }
    public function messages()
    {
        return [
            'nome.required'=>'É necessário preencher sem nome',
            'data_nasc.required'=>'É necessário preencher sua data de nascimento',
            'n_bi.required'=>'É necessário preencher seu nº de identidade',
            'nif.required'=>'É necessário preencher seu NIF',
            'telefone.required'=>'É necessário preencher seu nº de telefone',
            'fax.required'=>'É necessário preencher seu nº de e-mail',
         ];

    }
}
