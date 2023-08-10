<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40ProductoServicio extends Model
{
    protected $table = 'cfdi_40_productos_servicios';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'iva_trasladado',
        'ieps_trasladado',
        'complemento',
        'vigencia_desde',
        'vigencia_hasta',
        'estimulo_frontera',
        'similares',
    ];
}
