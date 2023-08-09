<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpTransporte extends Model
{
    protected $table = 'ccp_20_transportes';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
