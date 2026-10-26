@extends('layouts.base')

@section('contenido')
  <section class="tarjeta">
    <h2>Nuestros Repuestos en Stock</h2>
    <ul class="lista-repuestos">
      @foreach ($repuestos as $repuesto)
        <li>
          <strong>{{ $repuesto->nombre_producto }}</strong> — 
          Cantidad: {{ $repuesto->cantidad }} — 
          Precio: Bs {{ $repuesto->precio }}
        </li>
      @endforeach
    </ul>
    <br>
    <a href="/repuestos/nuevo" class="btn">+ Agregar un repuesto</a>
  </section>
@endsection