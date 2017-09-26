<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

class AutosController extends Controller
{
	public function index(){
		return view('principal');
}
	public function demo(){
		return view('demo');
}
	public function otrapagina(){
		return view('pagina');
}
}
