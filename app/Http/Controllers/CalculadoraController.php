<?php

namespace App\Http\Controllers;

use App\Calculadora;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function guardar(Request $request){
        //$operacion = Calculadora::create($request);
        $data['user_id'] = (int)$request['user_id'];
        $data['valor1'] = (double)$request['valor1'];
        $data['valor2'] = $request['valor2'];
        $data['operacion'] = (double)$request['operacion'];
        $data['resultado'] = (double)$request['resultado'];
        $operacion = Calculadora::create($data);
        return response()->json($data,200);
    }
}
