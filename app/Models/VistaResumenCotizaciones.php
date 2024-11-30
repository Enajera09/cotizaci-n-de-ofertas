<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VistaResumenCotizaciones extends Model
{
    use HasFactory;

    // Especificar el nombre de la vista
    protected $table = 'Vista_Resumen_Cotizaciones';

    // Evitar que la propiedad `timestamps` se maneje automáticamente
    public $timestamps = false;

    // Especificar los atributos que son asignables en masa
    protected $fillable = ['id', 'clientes', 'usuarios', 'forma_pago', 'usuarios', 'fecha_expedicion', 'fecha_vencimiento','TotalCotizacion',];
}
