<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40ObjetoImpuesto extends Model
{
    protected $table = 'cfdi_40_objetos_impuestos';

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
