<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpMaterialPeligroso extends Model
{
    protected $table = 'ccp_20_materiales_peligrosos';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'clase_o_div',
        'peligro_secundario',
        'nombre_tecnico',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
