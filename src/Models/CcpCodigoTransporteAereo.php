<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpCodigoTransporteAereo extends Model
{
    protected $table = 'ccp_20_codigos_transporte_aereo';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'nacionalidad',
        'texto',
        'designador_oaci',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
