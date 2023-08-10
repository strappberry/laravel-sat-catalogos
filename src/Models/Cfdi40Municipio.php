<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Municipio extends Model
{
    protected $table = 'cfdi_40_municipios';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'municipio';

    protected $keyType = 'string';

    protected $fillable = [
        'municipio',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
