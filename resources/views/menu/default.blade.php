<nav
    id="menu-{{ $menu->location }}"
    class="menu is-medium"
    role="navigation"
>
    <div class="level">
        @foreach ($menu->root_items as $item)
            @include('menu.item', ['item' => $item, 'depth' => 0])
        @endforeach
    </div>
</nav>
