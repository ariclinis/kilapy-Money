<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devedor extends Model
{
    //
    protected $fillable = ['nome','data_nasc','idade','genero','nacionalidade','estado_civil','n_bi','data_emissao','nif','foto','provincia_id','data_registo','contacto_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'dados_comuns';
}
