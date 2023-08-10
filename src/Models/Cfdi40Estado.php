<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Estado extends Model
{
    protected $table = 'cfdi_40_estados';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'estado';

    protected $keyType = 'string';

    protected $fillable = [
        'estado',
        'pais',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
