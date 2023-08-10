<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40Colonia extends Model
{
    protected $table = 'cfdi_40_colonias';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'colonia';

    protected $keyType = 'string';

    protected $fillable = [
        'colonia',
        'codigo_postal',
        'texto',
    ];
}
