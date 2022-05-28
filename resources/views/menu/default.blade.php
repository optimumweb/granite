<nav class="menu" role="navigation">
    <ul>
        @foreach($menu->items()->top()->get() as $item)
            {{ $item->render() }}
            <li>
                <a href="{{ $item->target }}">
                    {{ $item }}
                </a>

                @if ($item->children->count() > 0)
                    <ul>
                        @foreach($item->children as $item)
                            <li>
                                <a href="{{ $item->target }}">
                                    {{ $item }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
