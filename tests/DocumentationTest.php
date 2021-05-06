<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\LaravelStoplight\Tests;

use JustSteveKing\Laravel\LaravelStoplight\Tests\TestCase;

class DocumentationTest extends TestCase
{
    /**
     * @test
     */
    public function it_responds_as_expected()
    {
        $response = $this->get(config('stoplight.path.url'));

        $response->assertStatus(200);
    }
}
