<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40TipoComprobante extends Model
{
    protected $table = 'cfdi_40_tipos_comprobantes';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'valor_maximo',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
