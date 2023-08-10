<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpConfiguracionAutotransporte extends Model
{
    protected $table = 'ccp_20_configuraciones_autotransporte';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'numero_de_ejes',
        'numero_de_llantas',
        'remolque',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
