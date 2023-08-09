<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40CodigoPostal extends Model
{
    protected $table = 'cfdi_40_codigos_postales';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'estado',
        'municipio',
        'localidad',
        'estimulo_frontera',
        'vigencia_desde',
        'vigencia_hasta',
        'huso_descripcion',
        'huso_verano_mes_inicio',
        'huso_verano_dia_inicio',
        'huso_verano_hora_inicio',
        'huso_verano_diferencia',
        'huso_invierno_mes_inicio',
        'huso_invierno_dia_inicio',
        'huso_invierno_hora_inicio',
        'huso_invierno_diferencia',
    ];
}
