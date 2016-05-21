<?php namespace Howapped\Http\Controllers;

use Howapped\Http\Controllers\Controller;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @Get("/")
	 *
	 * @return Response
	 */
	public function index()
	{
		$routeName = app()->router->getCurrentRoute()->getName();
		return view('pages.index',compact('routeName'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @Get("/porffolio")
	 *
	 * @return Response
	 */
	public function portfolio()
	{
		$routeName = app()->router->getCurrentRoute()->getName();
		return view('pages.portfolio',compact('routeName'));
	}

	



}
