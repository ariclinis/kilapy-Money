<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dados_comuns extends Model
{
    //

    public $rules= [
             'nome' => 'required|max:255',
             'data_nasc' => 'required',
             'n_bi' =>'required|max:14|min:14',
             'nif' => 'required',
             'telefone' =>'required',
             'fax' => 'required',
         ];
    public $messagens =[
            'nome.required'=>'É necessário preencher sem nome',
            'data_nasc.required'=>'É necessário preencher sua data de nascimento',
            'n_bi.required'=>'É necessário preencher seu nº de identidade',
            'n_bi.max'=>'Informações do bilhete inválida é necessário 14 digitos',
            'n_bi.min'=>'Informações do bilhete inválida é necessário 14 digitos',
            'n_bi.required'=>'É necessário preencher seu nº de identidade',
            'nif.required'=>'É necessário preencher seu NIF',
            'telefone.required'=>'É necessário preencher seu nº de telefone',
            'fax.required'=>'É necessário preencher seu nº de e-mail',

         ];

    public function idade($data_enviada){
              $data = $data_enviada;

// Separa em dia, mês e ano
        list($ano, $mes, $dia) = explode('-', $data);

// Descobre que dia é hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

// Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

// Depois apenas fazemos o cálculo já citado :)
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        return $idade;
    }

}
