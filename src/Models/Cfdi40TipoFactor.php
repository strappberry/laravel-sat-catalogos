<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40TipoFactor extends Model
{
    protected $table = 'cfdi_40_tipos_factores';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
