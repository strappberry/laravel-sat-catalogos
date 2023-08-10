<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpMunicipio extends Model
{
    protected $table = 'ccp_20_municipios';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'municipio';

    protected $fillable = [
        'municipio',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
