<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40PatenteAduanal extends Model
{
    protected $table = 'cfdi_40_patentes_aduanales';

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
