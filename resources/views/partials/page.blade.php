<div
    id="entry-{{ $entry->id }}"
    class="entry page box block"
    itemscope
>
    <h2
        class="title is-2 entry-title"
        itemprop="headline"
    >
        {!! $entry->title !!}
    </h2>

    <div
        class="entry-content content"
    >
        {!! $entry->content !!}
    </div>
</div>
