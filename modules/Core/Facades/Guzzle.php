<?php
namespace Modules\Core\Facades;

use Illuminate\Support\Facades\Facade;

class Guzzle extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'guzzle';
    }
}
