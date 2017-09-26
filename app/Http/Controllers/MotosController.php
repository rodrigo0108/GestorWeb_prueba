<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motos;

class MotosController extends Controller
{
    public function index(){
		return view('pagina_motos');
}
}
