<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpTiposServicio extends Model
{
    protected $table = 'ccp_20_tipos_servicio';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'contenedor',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
