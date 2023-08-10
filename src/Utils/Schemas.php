<?php

namespace Strappberry\LaravelSatCatalogos\Utils;

/*
 * Some schemas are not correct outside sqlite so we need to fix them
 */
class Schemas
{
    public static function cfdi40FormasPago()
    {
        return <<<'SQL'
            CREATE TABLE IF NOT EXISTS `cfdi_40_formas_pago`(
            `id` text not null,
            `texto` text not null,
            `es_bancarizado` VARCHAR(255) not null,
            `requiere_numero_operacion` VARCHAR(255) not null,
            `permite_banco_ordenante_rfc` VARCHAR(255) not null,
            `permite_cuenta_ordenante` VARCHAR(255) not null,
            `patron_cuenta_ordenante` text not null,
            `permite_banco_beneficiario_rfc` VARCHAR(255) not null,
            `permite_cuenta_beneficiario` VARCHAR(255) not null,
            `patron_cuenta_beneficiario` text not null,
            `permite_tipo_cadena_pago` VARCHAR(255) not null,
            `requiere_banco_ordenante_nombre_ext` VARCHAR(255) not null,
            `vigencia_desde` text not null,
            `vigencia_hasta` text not null
            );
SQL;
    }

    public static function cfdi40Impuestos()
    {
        return <<<'SQL'
            CREATE TABLE IF NOT EXISTS `cfdi_40_impuestos`(
            `id` text not null,
            `texto` text not null,
            `retencion` VARCHAR(255) not null,
            `traslado` VARCHAR(255) not null,
            `ambito` text not null,
            `vigencia_desde` text not null,
            `vigencia_hasta` text not null
            );
SQL;
    }

    public static function cfdi40ProductosServicios()
    {
        return <<<'SQL'
            CREATE TABLE IF NOT EXISTS `cfdi_40_productos_servicios`(
            `id` text not null,
            `texto` text not null,
            `iva_trasladado` VARCHAR(255) not null,
            `ieps_trasladado` VARCHAR(255) not null,
            `complemento` text not null,
            `vigencia_desde` text not null,
            `vigencia_hasta` text not null,
            `estimulo_frontera` VARCHAR(255) not null,
            `similares` text not null
            );
SQL;
    }

    public static function cfdi40RegimenesFiscales()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_40_regimenes_fiscales`(
        `id` text not null,
        `texto` text not null,
        `aplica_fisica` VARCHAR(255) not null,
        `aplica_moral` VARCHAR(255) not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null
        );
SQL;
    }

    public static function cfdi40ReglasTasaCuota()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_40_reglas_tasa_cuota`(
        `tipo` text not null,
        `minimo` text not null,
        `valor` text not null,
        `impuesto` text not null,
        `factor` text not null,
        `traslado` VARCHAR(255) not null,
        `retencion` VARCHAR(255) not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null
        );
SQL;
    }

    public static function cfdi40UsosCfdi()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_40_usos_cfdi`(
        `id` text not null,
        `texto` text not null,
        `aplica_fisica` VARCHAR(255) not null,
        `aplica_moral` VARCHAR(255) not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null,
        `regimenes_fiscales_receptores` text not null
);
SQL;
    }

    public static function cfdiFormasPago()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_formas_pago`(
        `id` text not null,
        `texto` text not null,
        `es_bancarizado` VARCHAR(255) not null,
        `requiere_numero_operacion` VARCHAR(255) not null,
        `permite_banco_ordenante_rfc` VARCHAR(255) not null,
        `permite_cuenta_ordenante` VARCHAR(255) not null,
        `patron_cuenta_ordenante` text not null,
        `permite_banco_beneficiario_rfc` VARCHAR(255) not null,
        `permite_cuenta_beneficiario` VARCHAR(255) not null,
        `patron_cuenta_beneficiario` text not null,
        `permite_tipo_cadena_pago` VARCHAR(255) not null,
        `requiere_banco_ordenante_nombre_ext` VARCHAR(255) not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null
);
SQL;
    }

    public static function cfdiImpuestos()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_impuestos`(
        `id` text not null,
        `texto` text not null,
        `retencion` VARCHAR(255) not null,
        `traslado` VARCHAR(255) not null,
        `ambito` text not null,
        `entidad` text not null
);
SQL;
    }

    public static function cfdiProductosServicios()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_productos_servicios`(
        `id` text not null,
        `texto` text not null,
        `iva_trasladado` VARCHAR(255) not null,
        `ieps_trasladado` VARCHAR(255) not null,
        `complemento` text not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null,
        `estimulo_frontera` VARCHAR(255) not null,
        `similares` text not null
);
SQL;
    }

    public static function cfdiRegimenesFiscales()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_regimenes_fiscales`(
        `id` text not null,
        `texto` text not null,
        `aplica_fisica` VARCHAR(255) not null,
        `aplica_moral` VARCHAR(255) not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null
        );
SQL;
    }

    public static function cfdiReglasTasaCuota()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_reglas_tasa_cuota`(
  `tipo` text not null,
  `minimo` text not null,
  `valor` text not null,
  `impuesto` text not null,
  `factor` text not null,
  `traslado` VARCHAR(255) not null,
  `retencion` VARCHAR(255) not null,
  `vigencia_desde` text not null,
  `vigencia_hasta` text not null
);
SQL;
    }

    public static function cfdiUsosCfdi()
    {
        return <<<'SQL'
        CREATE TABLE IF NOT EXISTS `cfdi_usos_cfdi`(
        `id` text not null,
        `texto` text not null,
        `aplica_fisica` VARCHAR(255) not null,
        `aplica_moral` VARCHAR(255) not null,
        `vigencia_desde` text not null,
        `vigencia_hasta` text not null
);
SQL;
    }
}
