<?php namespace App\Http\Controllers;

class MenuController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function inicio()
	{
		return view('estaticas.inicio');
	}

	public function mall_rentall()
	{
		return view('estaticas.mall_rentall');
	}

	public function mall_condominio()
	{
		return view('estaticas.mall_condominio');
	}

	public function modalidad_contratacion()
	{
		return view('estaticas.modalidades_contratacion');
	}

	public function contacto()
	{
		return view('estaticas.contacto');
	}
}
