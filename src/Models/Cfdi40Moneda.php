<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Moneda extends Model
{
    protected $table = 'cfdi_40_monedas';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'decimales',
        'porcentaje_variacion',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
