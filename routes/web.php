<?php

use App\Http\Controllers\EntidadController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    abort(500, 'Error de prueba para mostrar el mensaje');
});

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
//Cualquier redireccion sea al inicio

Route::get('/home', function () {
    return redirect ()->route('incio');
});

Route ::resource('entidades', EntidadController::class);

