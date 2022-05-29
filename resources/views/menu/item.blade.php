<li>
    <a
        href="{{ $item->target }}"
        @if ($rel = $item->getMeta('rel'))
            rel="{{ $rel }}"
        @endif
    >
        {{ $item }}
    </a>

    @if ($item->children->count() > 0)
        <ul>
            @foreach($item->children as $child)
                @include('menu.item', ['item' => $child, 'depth' => $depth + 1])
            @endforeach
        </ul>
    @endif
</li>