<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpAutorizacionNaviero extends Model
{
    protected $table = 'ccp_20_autorizaciones_naviero';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
