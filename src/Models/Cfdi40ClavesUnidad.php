<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40ClavesUnidad extends Model
{
    protected $table = 'cfdi_40_claves_unidades';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'descripcion',
        'notas',
        'vigencia_desde',
        'vigencia_hasta',
        'simbolo',
    ];
}
