# Catálogos del SAT para Laravel

[![Última Versión en Packagist](https://img.shields.io/packagist/v/strappberry/laravel-sat-catalogos.svg?style=flat-square)](https://packagist.org/packages/strappberry/laravel-sat-catalogos)
[![Estado de las Pruebas en GitHub](https://img.shields.io/github/actions/workflow/status/strappberry/laravel-sat-catalogos/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/strappberry/laravel-sat-catalogos/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Estado del Estilo del Código en GitHub](https://img.shields.io/github/actions/workflow/status/strappberry/laravel-sat-catalogos/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/strappberry/laravel-sat-catalogos/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Descargas Totales](https://img.shields.io/packagist/dt/strappberry/laravel-sat-catalogos.svg?style=flat-square)](https://packagist.org/packages/strappberry/laravel-sat-catalogos)


Este paquete es para utilizar los catálogos del SAT (Servicio de Administración Tributaria) en México con Laravel. La implementación te permite manejar fácilmente los catálogos y mantenerlos actualizados.


## Instalación

Puedes instalar el paquete a través de composer:

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

Opcionalmente, puedes publicar las vistas usando:

```bash
php artisan vendor:publish --tag="laravel-sat-catalogos-views"
```

## Uso

```php
$laravelSatCatalogos = new Strappberry\LaravelSatCatalogos();
echo $laravelSatCatalogos->echoPhrase('Hello, Strappberry!');
```

## Pruebas

```bash
composer test
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
