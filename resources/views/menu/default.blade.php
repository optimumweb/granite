<nav
    id="menu-{{ $menu->location }}"
    class="menu is-medium"
    role="navigation"
>
    <ul>
        @foreach ($menu->root_items as $item)
            @include('menu.item', ['item' => $item, 'depth' => 0])
        @endforeach
    </ul>
</nav>
