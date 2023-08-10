<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpLocalidad extends Model
{
    protected $table = 'ccp_20_localidades';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'localidad';

    protected $fillable = [
        'localidad',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
