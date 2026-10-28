<?php

use App\Models\Producto;
use App\Models\Juguete;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/hola', function () {
    return 'Hola, soy Laravel.';
});

Route::get('/contacto', function () {
    return view('contacto'); 
});

Route::get('/productos', function () {

    return 'Lista de productos (ruta vieja)'; 
});


Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes', ['juguetes' => $juguetes]);
});

Route::get('/juguetes/nuevo', function () {
    return view('juguetes-nuevo');
});

Route::post('/juguetes/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});