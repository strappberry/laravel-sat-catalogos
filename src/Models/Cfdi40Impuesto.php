<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Impuesto extends Model
{
    protected $table = 'cfdi_40_impuestos';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'retencion',
        'traslado',
        'ambito',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
