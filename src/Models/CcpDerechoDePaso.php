<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpDerechoDePaso extends Model
{
    protected $table = 'ccp_20_derechos_de_paso';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'entre',
        'hasta',
        'otorga_recibe',
        'concesionario',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
