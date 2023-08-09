<?php

namespace Strappberry\LaravelSatCatalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Cfdi40FormasPago extends Model
{
    protected $table = 'cfdi_40_formas_pago';

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'texto',
        'es_bancarizado',
        'requiere_numero_operacion',
        'permite_banco_ordenante_rfc',
        'permite_cuenta_ordenante',
        'patron_cuenta_ordenante',
        'permite_banco_beneficiario_rfc',
        'permite_cuenta_beneficiario',
        'patron_cuenta_beneficiario',
        'permite_tipo_cadena_pago',
        'requiere_banco_ordenante_nombre_ext',
        'vigencia_desde',
        'vigencia_hasta',
    ];
}
