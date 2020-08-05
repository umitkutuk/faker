<?php

namespace Umitkutuk\Faker\Tests;

use Orchestra\Testbench\TestCase;
use Umitkutuk\Faker\FakerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [FakerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
