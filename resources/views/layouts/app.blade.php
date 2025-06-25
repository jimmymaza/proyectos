<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Integral de Planificación e Inversión Pública - @yield ('title')</title>
    
    {{-- Escribir estilos --}}
       
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> {{-- Crea este archivo si quieres estilos personalizados --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
<style>
        body {

            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }
        header, nav, footer {
            padding: 15px;
        }
        header {
            background-color: #003366;
            color: white;
        }
        nav {
            background-color: #0055a5;
        }
        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }
        nav a:hover {

            text-decoration: underline;
        }
        main {

            padding: 20px;
        }
        footer {
            background-color: #ddd;
            text-align: center;
        }

    </style>

</head>
<body>
    
        {{-- Header--}}
   <header>

        <h1>Sistema Integral de Planificación e Inversión Pública </h1>

    </header>

        {{-- Barra de Navegacion--}}

        <nav>

            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('entidades.index') }}">Entidades</a>    
             
        </nav>

            {{-- Contenido Principal--}}
        <main>

            @yield ('content')
            
        </main>

           {{-- Pie de Pagina--}} 

         <footer>

            <small>&copy; {{ date('Y') }} Secretaría Nacional de Planificación</small>


        </footer>

</body>
</html>