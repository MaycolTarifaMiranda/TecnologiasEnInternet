<?php

use App\Models\Repuesto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/repuestos', function () {
    $repuestos = Repuesto::all();
    return view('repuestos', ['repuestos' => $repuestos]);
});

Route::get('/repuestos/nuevo', function () {
    return view('repuestos-nuevo');
});

Route::post('/repuestos/nuevo', function () {
    Repuesto::create([
        'nombre_producto' => request()->input('nombre_producto'),
        'cantidad' => request()->input('cantidad'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/repuestos');
});