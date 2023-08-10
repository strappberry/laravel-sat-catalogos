<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpTiposPermiso extends Model
{
    protected $table = 'ccp_20_tipos_permiso';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'clave_transporte',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
