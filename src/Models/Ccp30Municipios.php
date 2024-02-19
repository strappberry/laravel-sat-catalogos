<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $municipio
 * @property string $estado
 * @property string $texto
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Ccp30Municipios extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ccp_30_municipios';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key for the model.
     * Note: This is a placeholder, as Laravel expects a single primary key.
     *
     * @var string
     */
    protected $primaryKey = 'id'; // Placeholder for Eloquent compatibility

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
        'municipio',
        'estado',
        'texto',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
