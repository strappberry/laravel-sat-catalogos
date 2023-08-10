<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class CcpColonia extends Model
{
    protected $table = 'ccp_20_colonias';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'colonia';

    protected $fillable = [
        'colonia',
        'codigo_postal',
        'texto',
    ];
}
