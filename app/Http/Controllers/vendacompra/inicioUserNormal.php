<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class inicioUserNormal extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET ///vendacompra/iniciousernormal
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('/vendacompra/inicioUserNormal');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET ///vendacompra/iniciousernormal/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST ///vendacompra/iniciousernormal
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET ///vendacompra/iniciousernormal/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET ///vendacompra/iniciousernormal/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT ///vendacompra/iniciousernormal/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE ///vendacompra/iniciousernormal/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}