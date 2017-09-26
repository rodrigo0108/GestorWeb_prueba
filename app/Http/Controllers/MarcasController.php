<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{

public function index(){
		return view('marcas.principal');
}
public function pedido(Request $request){
	$get_fruta=$request -> input('fruta');

	$get_cantidad=$request -> input('cantidad');
	if($get_fruta == 'naranja_id'){
		$precio=2.4;
	}else if($get_fruta == 'mandarina_id'){
		$precio=3.5;
	}else if($get_fruta == 'fresa_id'){
		$precio=5.7;
	}else{
		$precio=4.2;
	}
	$total= $get_cantidad*$precio;
	echo "La fruta es: $get_fruta, el precio por kilo es: $precio y su total es: $total";


}
public function demo(){
		return view('demo');
}
public function otrapagina(){
		return view('pagina');
}

}
