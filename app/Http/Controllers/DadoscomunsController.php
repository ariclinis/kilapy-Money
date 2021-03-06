<?php

namespace App\Http\Controllers;
use App\provincias;
use App\tbl_estados;
use App\municipios;
use App\bairros;
use App\dados_comuns;
use App\contactos;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DadoscomunsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $dadoscomuns = dadoscomuns::orderBy('id', 'DESC')->paginate();

        return view('compravenda.dadoscomuns.index', compact('dadoscomuns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        //dd($provincias);

            $user = \Auth::user();
        //dd($user);
            $provincias = provincias::all();
            $municipios = municipios::all();
            $bairros = bairros::all();
            $estados = tbl_estados::all();

        return view('vendacompra.dadoscomuns.create',compact($user,'estados','provincias','bairros','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $dadoscomuns = new dados_comuns;
        //validação do formulario
        $this->validate($request, $dadoscomuns->rules, $dadoscomuns->messagens);
        //calcular idade
        $idade=$dadoscomuns->idade($request->data_nasc);
        $user_logado =Auth::user()->id;

         $antepenultimo_id = contactos::all();
         $au_id=$antepenultimo_id->last()->id;

         $contactos = new contactos;
         $contactos->telefone =$request->telefone;
         $contactos->fixo =$request->fixo;
         $contactos->fax =$request->fax;
         $contactos->provincia_id =$request->provincia;
         $contactos->bairro_id =$request->bairro;
         $contactos->tipo_residencia =$request->tipo_residencia;
         $contactos->municipio_id = $request->municipio;
         $contactos->save();
         #verifica se o contacto foi inserido
         $ultimo_id = contactos::all();
         $u_id=$ultimo_id->last()->id;

             # code...
         if($au_id<$u_id){
         $dadoscomuns->nome = $request->nome;
         $dadoscomuns->data_nasc = $request->data_nasc;
         $dadoscomuns->idade= $idade;
         $dadoscomuns->genero = $request->genero;
         $dadoscomuns->nacionalidade = $request->nacionalidade;
         $dadoscomuns->estado_civil = $request->estado_civil;
         $dadoscomuns->n_bi = $request->n_bi;
         $dadoscomuns->nif = $request->nif;
         $dadoscomuns->contacto_id = $u_id;
         $dadoscomuns->user_id = $user_logado;
         $dadoscomuns->save();
          return redirect()->route('index');
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dadoscomuns  $dadoscomuns
     * @return \Illuminate\Http\Response
     */
    public function show(dadoscomuns $dadoscomuns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dadoscomuns  $dadoscomuns
     * @return \Illuminate\Http\Response
     */
    public function edit(dadoscomuns $dadoscomuns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dadoscomuns  $dadoscomuns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dadoscomuns $dadoscomuns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dadoscomuns  $dadoscomuns
     * @return \Illuminate\Http\Response
     */
    public function destroy(dadoscomuns $dadoscomuns)
    {
        //
    }
}
