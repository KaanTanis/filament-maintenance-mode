# Maintenance Mode

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kaantanis/filament-maintenance-mode.svg?style=flat-square)](https://packagist.org/packages/kaantanis/filament-maintenance-mode)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kaantanis/filament-maintenance-mode/run-tests?label=tests)](https://github.com/kaantanis/filament-maintenance-mode/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kaantanis/filament-maintenance-mode/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kaantanis/filament-maintenance-mode/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kaantanis/filament-maintenance-mode.svg?style=flat-square)](https://packagist.org/packages/kaantanis/filament-maintenance-mode)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require kaantanis/filament-maintenance-mode
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-maintenance-mode-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-maintenance-mode-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-maintenance-mode-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-maintenance-mode = new KaanTanis\FilamentMaintenanceMode();
echo $filament-maintenance-mode->echoPhrase('Hello, KaanTanis!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kaan](https://github.com/KaanTanis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
