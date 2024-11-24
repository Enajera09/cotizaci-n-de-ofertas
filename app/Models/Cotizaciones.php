<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cotizaciones extends Model
{
    use HasFactory;
    
    protected $table = 'cotizaciones';

    protected $fillable = ['cliente_id', 'usuario_id', 'forma_pago', 'fecha_expedicion','fecha_vencimiento',];
    public $timestamps = false;

    protected $dates = [
        'fecha_expedicion',
        'fecha_vencimiento',
        'created_at',
        'updated_at',
    ];

    public function clientes(): BelongsTo
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function CotizacionesDetalle(): HasMany
    {
        return $this->hasMany(CotizacionesDetalle::class, 'cotizacion_id');
    }

    public function usuarios()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }

}
