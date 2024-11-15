<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = ['imagen', 'nombre', 'precio', 'stock', 'descripcion', 'proveedor_id', 'fecha',];

    public $timestamps = false;

    protected $dates = [
        'fecha',
        'created_at',
        'updated_at',
    ];

    public function proveedores(): BelongsTo
    {
        return $this->belongsTo(Proveedores::class, 'proveedor_id');
    }

    public function CotizacionesDetalle(): HasMany
    {
        return $this->hasMany(CotizacionesDetalle::class, 'producto_id');
    }
}
