<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class InicioUserNormal extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /iniciousernormal
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user = \Auth::user();
		dd($user);
		return view('inicioUserNormal');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /iniciousernormal/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /iniciousernormal
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /iniciousernormal/{id}
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
	 * GET /iniciousernormal/{id}/edit
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
	 * PUT /iniciousernormal/{id}
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
	 * DELETE /iniciousernormal/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}