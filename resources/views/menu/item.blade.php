<li>
    <a
        href="{{ $item->target }}"
        class="{{ $item->metadata['class'] ?? '' }}"
        rel="{{ $item->metadata['rel'] ?? '' }}"
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