# Filament Maintenance Mode

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kaantanis/filament-maintenance-mode.svg?style=flat-square)](https://packagist.org/packages/kaantanis/filament-maintenance-mode)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kaantanis/filament-maintenance-mode/run-tests?label=tests)](https://github.com/kaantanis/filament-maintenance-mode/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kaantanis/filament-maintenance-mode/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kaantanis/filament-maintenance-mode/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kaantanis/filament-maintenance-mode.svg?style=flat-square)](https://packagist.org/packages/kaantanis/filament-maintenance-mode)


# Don't use this package yet. It's still in development. You can also contribute to this package if you want to.

## Roadmap for v1.0.0 production release
- [ ] Integrate with PreventRequestsDuringMaintenance middleware
- [ ] Laravel maintenance mode setting e.g. retryAfter, allowedIps, secret
- [ ] Spatie roles and permissions integration
- [ ] Custom maintenance mode view
- [ ] Custom maintenance mode message

This package provides a maintenance mode for [Filament](https://filamentadmin.com/).  
You can enable or disable the maintenance mode from the Filament dashboard.  

This package will create a file named `down` in your storage/framework directory. 
This is laravel's default way to enable maintenance mode.

## Installation

You can install the package via composer:

```bash
composer require kaantanis/filament-maintenance-mode
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
    //
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

If you want to contribute to Filament packages, you may want to test it in a real Laravel project:

* Fork this repository to your GitHub account.
* Create a Laravel app locally.
* Clone your fork in your Laravel app's root directory.
* In the /packages directory, create a branch for your fix, e.g. /enhancement/spatie-roles-support. 

Install the packages in your app's composer.json:
```json
{
    ...
    "require": {
        "kaantanis/filament-maintenance-mode": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "packages/*"
        }
    ],
    ...
}
```

## Credits

- [Kaan](https://github.com/KaanTanis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
