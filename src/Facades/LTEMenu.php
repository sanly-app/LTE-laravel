<?php

namespace SanlyApp\LTE\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SanlyApp\LTE\LTEMenu
 */
class LTEMenu extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SanlyApp\LTE\LTEMenu::class;
    }
}
