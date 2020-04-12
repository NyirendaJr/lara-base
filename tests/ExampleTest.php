<?php

namespace Thelabdevtz\LaraBase\Tests;

use Orchestra\Testbench\TestCase;
use Thelabdevtz\LaraBase\LaraBaseServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaraBaseServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
