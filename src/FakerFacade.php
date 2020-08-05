<?php

namespace Umitkutuk\Faker;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Umitkutuk\Faker\Skeleton\SkeletonClass
 */
class FakerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'faker';
    }
}
