<?php

namespace Cristhiancoaquira\TestPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cristhiancoaquira\TestPackage\TestPackage
 */
class TestPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test-package';
    }
}
