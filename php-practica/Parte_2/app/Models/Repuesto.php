<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $table = 'repuestos';
    
    protected $fillable = ['nombre_producto', 'cantidad', 'precio'];
}