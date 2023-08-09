<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpClaveUnidad extends Model
{
    protected $table = 'ccp_20_claves_unidades';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'descripcion',
        'nota',
        'vigencia_desde',
        'vigencia_hasta',
        'simbolo',
        'bandera',
    ];
}
