<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40NumerosPedimentoAduana extends Model
{
    protected $table = 'cfdi_40_numeros_pedimento_aduana';

    public $timestamps = false;

    protected $fillable = [
        'aduana',
        'patente',
        'ejercicio',
        'cantidad',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
