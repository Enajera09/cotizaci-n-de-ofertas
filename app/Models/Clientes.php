<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = ['nombre', 'direccion', 'telefono', 'email',];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function cotizaciones(): HasMany
    {
        return $this->hasMany(Cotizaciones::class, 'cliente_id');
    }
}
