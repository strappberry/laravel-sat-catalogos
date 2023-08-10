<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpProductoServicio extends Model
{
    protected $table = 'ccp_20_productos_servicios';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'similares',
        'material_peligroso',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
