@extends('layouts.base')

@section('contenido')
  <section class="tarjeta">
    <h2>Agregar un Repuesto Nuevo</h2>
    
    <form action="/repuestos/nuevo" method="POST">
      @csrf <!-- Esto es obligatorio en Laravel por seguridad -->
      
      <div class="campo">
        <label for="nombre_producto">Nombre del Repuesto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required>
      </div>
      
      <div class="campo">
        <label for="cantidad">Cantidad en Stock:</label>
        <input type="number" id="cantidad" name="cantidad" required>
      </div>
      
      <div class="campo">
        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio" required>
      </div>
      
      <button type="submit">Guardar Repuesto</button>
      <a href="/repuestos" style="margin-left: 10px; color: #6c757d; text-decoration: none;">Cancelar</a>
    </form>
  </section>
@endsection