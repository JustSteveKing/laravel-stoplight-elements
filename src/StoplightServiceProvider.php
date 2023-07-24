<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\LaravelStoplight;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class StoplightServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish Config
            $this->publishes([
                __DIR__ . '/../config/stoplight.php' => config_path('stoplight.php'),
            ], 'config');

            // Publish Views
            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/stoplight'),
            ], 'views');
        }

        if (! config('stoplight.enabled')) {
            return;
        }

        Route::group([
            'domain' => config('stoplight.path.domain'),
        ], function() {
            $this->loadRoutesFrom(
                __DIR__ . '/../routes/stoplight.php'
            );
        });

        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'stoplight',
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/stoplight.php',
            'stoplight',
        );
    }
}
