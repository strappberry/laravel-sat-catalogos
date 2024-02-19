# Catálogos del SAT para Laravel

[![Última Versión en Packagist](https://img.shields.io/packagist/v/strappberry/laravel-sat-catalogos.svg?style=flat-square)](https://packagist.org/packages/strappberry/laravel-sat-catalogos)
[![Estado de las Pruebas en GitHub](https://img.shields.io/github/actions/workflow/status/strappberry/laravel-sat-catalogos/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/strappberry/laravel-sat-catalogos/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Estado del Estilo del Código en GitHub](https://img.shields.io/github/actions/workflow/status/strappberry/laravel-sat-catalogos/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/strappberry/laravel-sat-catalogos/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Descargas Totales](https://img.shields.io/packagist/dt/strappberry/laravel-sat-catalogos.svg?style=flat-square)](https://packagist.org/packages/strappberry/laravel-sat-catalogos)


Este paquete es para utilizar los catálogos del SAT (Servicio de Administración Tributaria) en México con Laravel. La implementación te permite manejar fácilmente los catálogos y mantenerlos actualizados.

Se usa el repositorio de [PHPCfdi Resources Sat Catalogs](https://github.com/phpcfdi/resources-sat-catalogs) para descargar los catálogos.

## Instalación

Puedes instalar el paquete a través de composer

Agrega el repositorio tipo vcs a tu archivo de `composer.json`

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/strappberry/laravel-sat-catalogos.git"
        }
    ]
}
```

```bash
composer require strappberry/laravel-sat-catalogos
```

Puedes publicar el archivo de configuración con:

```bash
php artisan vendor:publish --tag="laravel-sat-catalogos-config"
```

Este es el contenido del archivo de configuración publicado:

```php
return [
];
```

## Uso

```bash
# Agregar los catálogos a la base de datos
php artisan laravel-sat-catalogos:descargar-catalogos
```

```php
use Strappberry\LaravelSatCatalogos\Models\CcpDerechoDePaso;

$derechoPaso = CcpDerechoDePaso::first();
```

## Roadmap

- [ ] Modelos CFDI 3.3
- [x] Modelos CFDI 4.0
- [x] Modelos Carta Porte
- [x] Modelos Carta Porte 3.0
- [ ] Modelos Comercio exterior
- [ ] Modelos Nómina
- [ ] Modelos Retenciones
- [ ] Migrations
- [ ] Factories

## Pruebas

```bash
composer test
```

## Modelos disponibles
```php
CcpAutorizacionNaviero
CcpClaveUnidad
CcpCodigoTransporteAereo
CcpColonia
CcpConfiguracionAutotransporte
CcpConfiguracionMaritima
CcpContenedor
CcpContenedorMaritimo
CcpDerechoDePaso
CcpEstacion
CcpFiguraTransporte
CcpLocalidad
CcpMaterialPeligroso
CcpMunicipio
CcpParteTransporte
CcpProductoServicio
CcpTiposCarga
CcpTiposCarro
CcpTiposEmbalaje
CcpTiposEstacion
CcpTiposPermiso
CcpTiposRemolque
CcpTiposServicio
CcpTiposTrafico
CcpTransporte
Ccp30AutorizacionesNaviero
Ccp30ClavesUnidades
Ccp30CodigosTransporteAereo
Ccp30Colonias
Ccp30CondicionesEspeciales
Ccp30ConfiguracionesAutotransporte
Ccp30ConfiguracionesMaritimas
Ccp30Contenedores
Ccp30ContenedoresMaritimos
Ccp30DerechosDePaso
Ccp30DocumentosAduaneros
Ccp30Estaciones
Ccp30FigurasTransporte
Ccp30FormasFarmaceuticas
Ccp30Localidades
Ccp30MaterialesPeligrosos
Ccp30Municipios
Ccp30PartesTransporte
Ccp30ProductosServicios
Ccp30RegimenesAduaneros
Ccp30RegistrosIstmo
Ccp30SectoresCofepris
Ccp30TiposCarga
Ccp30TiposCarro
Ccp30TiposEmbalaje
Ccp30TiposEstacion
Ccp30TiposMateria
Ccp30TiposPermiso
Ccp30TiposRemolque
Ccp30TiposServicio
Ccp30TiposTrafico
Ccp30Transportes.php
Cfdi40Aduana
Cfdi40ClavesUnidad
Cfdi40CodigoPostal
Cfdi40Colonia
Cfdi40Estado
Cfdi40Exportacion
Cfdi40FormasPago
Cfdi40Impuesto
Cfdi40Localidad
Cfdi40Mes
Cfdi40MetodoPago
Cfdi40Moneda
Cfdi40Municipio
Cfdi40NumerosPedimentoAduana
Cfdi40ObjetoImpuesto
Cfdi40Pais
Cfdi40PatenteAduanal
Cfdi40Periodicidad
Cfdi40ProductoServicio
Cfdi40RegimenFiscal
Cfdi40ReglasTasaCuota
Cfdi40TipoComprobante
Cfdi40TipoFactor
Cfdi40TipoRelacion
Cfdi40UsoCfdi
```

## Registro de cambios

Por favor, consulta el [CHANGELOG](CHANGELOG.md) para más información sobre los cambios recientes.

## Contribuciones

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Strappberry](https://github.com/Strappberry)
- [Ivan Aquino](https://github.com/IvanAquino)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
