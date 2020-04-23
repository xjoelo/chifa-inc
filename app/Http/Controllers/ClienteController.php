<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\RequestStoreCliente;

class ClienteController extends Controller
{
    public function insert(RequestStoreCliente $request){
    	$cliente = new Cliente;
    	$cliente->nombres = $request->nombres;
    	$cliente->celular = $request->celular;
    	$cliente->email = $request->email;
    	$cliente->direccion = $request->direccion;
    	$cliente->save();
    	return view('/');
    }
}
