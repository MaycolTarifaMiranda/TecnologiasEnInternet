@extends('layouts.base')

@section('contenido')
  <section class="tarjeta">
    <h2>Lista de Juguetes</h2>
    
    <p>Bienvenido a la juguetería El Trompo, el lugar donde la diversión y la imaginación cobran vida. Aquí encontrarás los mejores juguetes para los más pequeños de la casa.</p>

    <p>Hay <strong>{{ count($juguetes) }}</strong> juguetes en el estante.</p>

    <ul class="lista-repuestos">
      @foreach ($juguetes as $juguete)
        <li>
          <strong>{{ $juguete->nombre }}</strong> — Precio: Bs {{ $juguete->precio }}
        </li>
      @endforeach
    </ul>

    <p><strong>Estante atendido por Maycol Tarifa Miranda</strong></p>

    <br>
    <a href="/juguetes/nuevo" class="btn">+ Registrar un juguete</a>
  </section>
@endsection