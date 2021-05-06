# Laravel Stoplight Elements

Easily publish your API documentation using your OpenAPI document in your Laravel Application.

## Installation

You can install this package via composer:

```bash
composer require juststeveking/laravel-stoplight-elements
```


## Configuration

You can publish the configuration file with:

```bash
php artisan vendor:publish --provider="JustSteveKing\Laravel\LaravelStoplight\StoplightServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'path' => [
        'name' => env('STOPLIGHT_PATH_NAME', 'docs'),
        'url' => env('STOPLIGHT_PATH_URL', 'api/docs'),
    ],

    'openapi' => [
        'path' => env('STOPLIGHT_OPENAPI_PATH', 'https://api.apis.guru/v2/specs/github.com/1.1.4/openapi.yaml')
    ],

    'config' => [
        'router' => "hash",

        'layout' => "sidebar",
    ]
];
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.


## Security

If you discover any security related issues, please email juststevemcd@gmail.com instead of using the issue tracker.


## Credits

- [Steve McDougall][link-author]
- [All Contributors][link-contributors]
- [Stoplight Team for the Elements Web Components](https://stoplight.io/open-source/elements/)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

