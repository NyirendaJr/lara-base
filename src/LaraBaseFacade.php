<?php

namespace Thelabdevtz\LaraBase;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thelabdevtz\LaraBase\Skeleton\SkeletonClass
 */
class LaraBaseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lara-base';
    }
}
