@foreach($menuItems as $menuItem)
    <li class="nav-item">
        <a href="#"
           class="nav-link"
        >
            <i class="nav-icon {{$menuItem['icon']}}"></i>
            <p>
                {{$menuItem['name']}}
                @if(isset($menuItem['subMenu']) && $menuItem['subMenu'])
                    <i class="right fas fa-angle-left"></i>
                @endif
            </p>
        </a>

        @if(isset($menuItem['subMenu']) && $menuItem['subMenu'])
            <ul class="nav nav-treeview">
                @foreach($menuItem['subMenu'] as $subItem)
                    <li class="nav-item">
                        <a href="#"
                           class="nav-link">
                            <i class="nav-icon {{$subItem['icon']}}"></i>
                            <p>
                                {{$subItem['name']}}
                            </p>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
