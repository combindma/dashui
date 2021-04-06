# Dashboard  user interface

[![Latest Version on Packagist](https://img.shields.io/packagist/v/combindma/dashui.svg?style=flat-square)](https://packagist.org/packages/combindma/dashui)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/combindma/dashui/Check%20&%20fix%20styling?label=code%20style)](https://github.com/combindma/dashui/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/combindma/dashui.svg?style=flat-square)](https://packagist.org/packages/combindma/dashui)

## Installation

You can install the package via composer:

```bash
composer require combindma/dashui
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Combindma\Dashui\DashuiServiceProvider" --tag="dashui-config"
```

This is the contents of the published config file:

```php
    //layout to use
    'layout' => env('THEME_DASH_LAYOUT', 'layout1')
```

You can publish views with:

```bash
php artisan vendor:publish --provider="Combindma\Dashui\DashuiServiceProvider" --tag="dashui-views"
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Combind](https://github.com/combindma)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
