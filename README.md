# Laravel Tide Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ke-helle/tide.svg?style=flat-square)](https://packagist.org/packages/ke-helle/tide)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ke-helle/tide/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ke-helle/tide/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ke-helle/tide/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ke-helle/tide/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ke-helle/tide.svg?style=flat-square)](https://packagist.org/packages/ke-helle/tide)

This is a set of blade and livewire components. A livewire form builder for easy dynamic development. This package is
sill in active development. Meaning breaking changes can occur without warning.

## Installation

You can install the package via composer:

```bash
composer require ke-helle/tide
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="tide-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="tide-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="tide-views"
```

## Usage

```php
$tide = new Kehelle\Tide();
echo $tide->echoPhrase('Hello, Kehelle!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kim Eric Helle](https://github.com/ke-helle)
- [All Contributors](../../contributors)

This package is also heavily inspired by Randall Wilk´s
Laravel Form Components as well as the Pines UI Library.

## Disclaimer

This package is not affiliated with, maintained, authorized, endorsed or sponsored by Laravel, TailwindCSS, Laravel
Livewire, Alpine.js, or any of its affiliates.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
