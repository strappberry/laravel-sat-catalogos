<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Localidad extends Model
{
    protected $table = 'cfdi_40_localidades';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'localidad';

    protected $keyType = 'string';

    protected $fillable = [
        'localidad',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
