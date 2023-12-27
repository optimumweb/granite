@isset($entry->cover, $entry->cover->url)
    <div class="card-image">
        <figure class="entry-cover image block">
            <img
                src="{{ $entry->cover->url }}"
                alt="{{ $entry->title }}"
            />
        </figure>
    </div>
@endisset
