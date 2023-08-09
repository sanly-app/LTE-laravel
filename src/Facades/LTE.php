<?php

namespace SanlyApp\LTE\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SanlyApp\LTE\LTE
 */
class LTE extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SanlyApp\LTE\LTE::class;
    }
}
