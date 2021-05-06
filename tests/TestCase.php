<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\LaravelStoplight\Tests;

use JustSteveKing\Laravel\LaravelStoplight\StoplightServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            StoplightServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('stoplight.path.url', 'api/docs');
    }
}
