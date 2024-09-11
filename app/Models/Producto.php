<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = ['imagen', 'nombre', 'precio', 'stock', 'descripcion', 'proveedor', 'fecha',];

    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',
    ];
}
