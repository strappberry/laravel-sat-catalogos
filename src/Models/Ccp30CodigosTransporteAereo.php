<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $nacionalidad
 * @property string $texto
 * @property string $designador_oaci
 * @property string $vigencia_desde
 * @property string $vigencia_hasta
 */
class Ccp30CodigosTransporteAereo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ccp_30_codigos_transporte_aereo';

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
        'nacionalidad',
        'texto',
        'designador_oaci',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
