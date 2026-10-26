<?php

namespace Database\Seeders;

use App\Models\Repuesto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Repuesto::create(['nombre_producto' => 'Casco de Moto', 'cantidad' => 10, 'precio' => 250]);
        Repuesto::create(['nombre_producto' => 'Aceite 20W-50', 'cantidad' => 25, 'precio' => 45]);
        Repuesto::create(['nombre_producto' => 'Llanta Trasera', 'cantidad' => 5, 'precio' => 180]);
    }
}