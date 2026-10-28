@extends('layouts.base')

@section('contenido')
  <section class="tarjeta">
    <h2>Registrar un Juguete</h2>

    @if ($errors->any())
        <div class="error-box">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/juguetes/nuevo" method="POST">
      @csrf
      
      <div class="campo">
        <label for="nombre">Nombre del juguete:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
      </div>
      
      <div class="campo">
        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}">
      </div>
      
      <button type="submit">Registrar juguete</button>
      <a href="/juguetes" style="margin-left: 10px; color: #6c757d; text-decoration: none;">Cancelar</a>
    </form>
  </section>
@endsection