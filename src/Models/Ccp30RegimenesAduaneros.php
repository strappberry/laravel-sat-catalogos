<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $texto
 * @property string $impoexpo
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Ccp30RegimenesAduaneros extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ccp_30_regimenes_aduaneros';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'texto',
        'impoexpo',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
