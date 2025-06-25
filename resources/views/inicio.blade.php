@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h2 class="text 2x1 font-bold mb-4">Bienvenido al Sistema Integral de Planificación e Inversión Pública - SIPeIP 1</h2>
    <p class="mb-4">Seleccione la opcion de Menu para Iniciar</p>

    <ul class="list-disc ml-6 text-blue-700 ">
        <li> <a href="{{ route('entidades.index')}}">Entidades</a></li>

    </ul>



@endsection