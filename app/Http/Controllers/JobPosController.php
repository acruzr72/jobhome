<?php namespace jobposting\Http\Controllers;

use jobposting\Http\Requests;
use jobposting\Http\Controllers\Controller;
use jobposting\Entities\VacantePost;
use Illuminate\Http\Request;

class JobPosController extends Controller {

	public function home()
	{

		$vacantepost = VacantePost::orderBy('id','DESC')->get();
		return view('vacantesList',compact('vacantepost'));
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function acerca()
	{
		return view('acerca');
	}

	
}
