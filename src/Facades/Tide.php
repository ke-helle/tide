<?php

namespace Kehelle\Tide\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kehelle\Tide\Tide
 */
class Tide extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kehelle\Tide\Tide::class;
    }
}
