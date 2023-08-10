<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpContenedor extends Model
{
    protected $table = 'ccp_20_contenedores';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'descripcion',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
