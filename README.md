# This is my package laravel-api-traffic

[![Latest Version on Packagist](https://img.shields.io/packagist/v/brightfish-be/laravel-api-traffic.svg?style=flat-square)](https://packagist.org/packages/brightfish-be/laravel-api-traffic)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/brightfish-be/laravel-api-traffic/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/brightfish-be/laravel-api-traffic/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/brightfish-be/laravel-api-traffic/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/brightfish-be/laravel-api-traffic/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/brightfish-be/laravel-api-traffic.svg?style=flat-square)](https://packagist.org/packages/brightfish-be/laravel-api-traffic)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require brightfish-be/laravel-api-traffic
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-api-traffic-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-api-traffic-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-api-traffic-views"
```

## Usage

```php
$laravelApiTraffic = new Brightfish\LaravelApiTraffic();
echo $laravelApiTraffic->echoPhrase('Hello, Brightfish!');
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

- [Peter Forret](https://github.com/brightfish-be)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
