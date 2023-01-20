# Filament Maintenance Mode

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kaantanis/filament-maintenance-mode.svg?style=flat-square)](https://packagist.org/packages/kaantanis/filament-maintenance-mode)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kaantanis/filament-maintenance-mode/run-tests?label=tests)](https://github.com/kaantanis/filament-maintenance-mode/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kaantanis/filament-maintenance-mode/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kaantanis/filament-maintenance-mode/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kaantanis/filament-maintenance-mode.svg?style=flat-square)](https://packagist.org/packages/kaantanis/filament-maintenance-mode)


# Don't use this package yet. It's still in development. But you can still use it if you want to. Working fine. You can also contribute to this package if you want to.

**This package is a Filament package.**

## How it works?
When you enable maintenance mode, it will create a file named `down` in your `storage/framework` directory. When you disable maintenance mode, it will delete that file. That's it.  
Also that's how Laravel's maintenance mode works. But you don't need `php artisan down` and `php artisan up` commands anymore. You can do it from Filament's dashboard.  

But keep mind, if you enable maintenance mode, only your session will be able to access your website.  
**So, don't forget to disable maintenance mode after you're done.**
Because if you don't, your website will be down for everyone. But don't worry, if you forget to disable maintenance mode, you can do it from your server. Just delete the `down` file from `storage/framework` directory.
Or `php artisan up` command.

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
// TODO: waiting for package to be published v1.0.0. So don't work yet.
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
