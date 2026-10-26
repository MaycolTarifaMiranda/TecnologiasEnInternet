<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('repuestos', function (Blueprint $table) {
            $table->id(); // ID
            $table->string('nombre_producto'); // Nombre_Producto
            $table->integer('cantidad');       // Cantidad
            $table->integer('precio');         // Precio
            $table->timestamps();              // Fechas de creacion 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repuestos');
    }
};