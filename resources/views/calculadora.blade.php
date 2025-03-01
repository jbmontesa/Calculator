@extends('layouts.app')

        
@section('content')
<link rel="stylesheet" type="text/css" href="/css/estilo.css">
    <title>Laravel</title>
    <a href="{{ route('CALCULADORA')}}"> <h1 class="text-center">Calculadora Basica</h1></a>
    <input hidden value="{{Auth::user()->id}}" id="user_id">
    <div class="container">
        <div class="calculadora">
            <div class="pantalla">
                <div id="resultado"></div>
            </div>
            <div class="teclas">
                <div class="numeros">

                    <div>
                        <button id="n1">1</button>
                        <button id="n2">2</button>
                        <button id="n3">3</button>
                    </div>

                    <div>
                        <button id="n4">4</button>  
                        <button id="n5">5</button>  
                        <button id="n6">6</button>
                    </div>

                    <div>
                        <button id="n7">7</button>
                        <button id="n8">8</button>
                        <button id="n9">9</button>
                    </div>

                    <div>
                        <button id="n0">0</button>
                    </div>

                </div>
                <div class="op">

                    <button id="s">+</button>
                    <button id="r">-</button>
                    <button id="d">÷</button>
                    <button id="m">x</button>
                </div>
                <div class="sr">
                    <button id="sr">=</button>
                </div>
            </div>
            <button class="btn" id="save">Guaradar Operacion</button>
        </div>
    |</div>
@endsection