<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dados_comuns extends Model
{
    //

    public $rules= [
             'nome' => 'required|max:255',
             'data_nasc' => 'required',
             'n_bi' =>'required',
             'nif' => 'required',
             'telefone' =>'required',
             'fax' => 'required',
         ];
    public $messagens =[
            'nome.required'=>'Preencha o Nome',
            'data_nasc.required'=>'Preencha o Nome',
            'n_bi.required'=>'Preencha o Nome',
            'nif.required'=>'Preencha o Nome',
            'telefone.required'=>'Preencha o Nome',
            'fax.required'=>'Preencha o Nome',
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
