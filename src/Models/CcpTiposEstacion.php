<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpTiposEstacion extends Model
{
    protected $table = 'ccp_20_tipos_estacion';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'claves_transportes',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
