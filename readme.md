# Laravel USSD Framework

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

Easily build USSD apps with PHP[Laravel].

## Installation

You can install the package via composer:

``` bash
$ composer require cybersai/laravel-ussd
```

The package will automatically register itself.

You can optionally publish the config file with:
```bash
php artisan vendor:publish --provider="CyberSai\LaravelUssd\UssdServiceProvider"
```

This is the contents of the published config file:

```php
return [
    'provider' => env('USSD_PROVIDER', 'korba')
];
```

**Update your `.env` file with the USSD provider key value pair**
```bash
USSD_PROVIDER=
```

Supported USSD providers [Ghana]:
* [korba](http://korbaweb.com)
* [hubtel](https://developers.hubtel.com/docs/getting-started-with-ussd)
* [nsano](https://www.nsano.com)
* [txtghana](https://www.txtghana.com)

## Usage

**Create USSD Controller**
```bash
php artisan ussd:controller filename
```

**Create USSD Migration**
```bash
php artisan ussd:migration tablename
```

**Create USSD Model**
```bash
php artisan ussd:model classname
```

**Create USSD List View**
```bash
php artisan ussd:view-list filename
```

**Create USSD Simple View**
```bash
php artisan ussd:view-simple filename
```

**Create USSD Titled View**
```bash
php artisan ussd:view-titled filename
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email isaacsai030@gmail.com instead of using the issue tracker.

## Credits

- [Isaac Adzah Sai][link-author]
- [Benjamin Manford][link-author2]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/cybersai/laravel-ussd.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cybersai/laravel-ussd.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cybersai/laravel-ussd/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/cybersai/laravel-ussd
[link-downloads]: https://packagist.org/packages/cybersai/laravel-ussd
[link-travis]: https://travis-ci.org/cybersai/laravel-ussd
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/cybersai
[link-author2]: https://github.com/manfordbenjamin
[link-contributors]: ../../contributors
