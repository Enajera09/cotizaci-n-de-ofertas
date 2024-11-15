<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    use HasFactory;

    public function cotizaciones(): HasMany
    {
        return $this->hasMany(Cotizaciones::class, 'cliente_id');
    }
}
