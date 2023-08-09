<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Pais extends Model
{
    protected $table = 'cfdi_40_paises';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'patron_codigo_postal',
        'patron_identidad_tributaria',
        'validacion_identidad_tributaria',
        'agrupaciones',
    ];
}
