<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40ReglasTasaCuota extends Model
{
    protected $table = 'cfdi_40_reglas_tasa_cuota';

    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'minimo',
        'valor',
        'impuesto',
        'factor',
        'traslado',
        'retencion',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
