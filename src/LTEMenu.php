<?php

namespace SanlyApp\LTE;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class LTEMenu
{
    protected array $items = [];

    public function add($group, $name, $icon, $subMenu = null): void
    {
        $this->items[$group][] = [
            "name" => $name,
            "icon" => $icon,
            "subMenu" => $subMenu
        ];
    }

    public function subMenu($name, $icon, $route): array
    {
        return [
            "name" => $name,
            "icon" => $icon,
            "route" => $route
        ];
    }

    public function render(): void
    {
        $routeAsName = explode('/', request()->path())[0];
        $html = Blade::render(
            file_get_contents(resource_path('views/templates/menu.blade.php')),
            ['menuItems' => $this->items[$routeAsName] ?? []],
            deleteCachedView: true
        );
        $html = preg_replace('/\s+/', ' ', $html);
        View::share('sideBarMenu', $html);
    }
}
