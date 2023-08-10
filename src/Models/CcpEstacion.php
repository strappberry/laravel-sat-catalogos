<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpEstacion extends Model
{
    protected $table = 'ccp_20_estaciones';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'clave_transporte',
        'nacionalidad',
        'designador_iata',
        'linea_ferrea',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
