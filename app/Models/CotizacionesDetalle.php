<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CotizacionesDetalle extends Model
{
    use HasFactory;

    protected $table = 'cotizaciones_detalle';

    protected $fillable = ['cotizacion_id', 'producto_id', 'cantidad', 'valor_unitario','total',];
    public $timestamps = false;

    public function cotizaciones(): BelongsTo
    {
        return $this->belongsTo(Cotizaciones::class, 'cotizacion_id');
    }

    public function productos(): BelongsTo
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
