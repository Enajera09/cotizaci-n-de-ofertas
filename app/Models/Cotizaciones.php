<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cotizaciones extends Model
{
    use HasFactory;

    public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function CotizacionesDetalle(): HasMany
    {
        return $this->hasMany(CotizacionesDetalle::class, 'cotizacion_id');
    }

}
