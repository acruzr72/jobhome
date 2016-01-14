<?php namespace jobposting\Http\Controllers;

use jobposting\Http\Requests;
use jobposting\Http\Controllers\Controller;

use Illuminate\Http\Request;

class JobPosController extends Controller {

	public function home()
	{
		return view('vacantesList');
	}

	
}
