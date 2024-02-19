<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $texto
 * @property string $descripcion
 * @property string $nota
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 * @property string $simbolo
 * @property string $bandera
 */
class Ccp30ClavesUnidades extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ccp_30_claves_unidades';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The data type of the auto-incrementing key.
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
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'texto',
        'descripcion',
        'nota',
        'vigencia_desde',
        'vigencia_hasta',
        'simbolo',
        'bandera',
    ];
}
