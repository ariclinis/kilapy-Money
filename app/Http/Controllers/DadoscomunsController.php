<?php

namespace App\Http\Controllers;
use App\provincias;
use App\dadoscomuns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $provincias = provincias::all();
        //dd($provincias);
        return view('vendacompra.dadoscomuns.create',compact('provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pegardadoscomuns(Request $dados)
    {
        //

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
