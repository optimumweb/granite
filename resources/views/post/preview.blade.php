<article
    id="entry-{{ $entry->id }}"
    class="entry post block"
    itemscope
    itemtype="https://schema.org/Article"
>
    <div class="card">
        @isset($entry->cover)
            <div class="card-image">
                <figure class="entry-cover image is-16by9 block">
                    <a href="{!! $entry->url !!}">
                        <img
                            class="is-constrained"
                            src="{{ $entry->cover->url }}"
                            width="{{ $entry->cover->image_width }}"
                            height="{{ $entry->cover->image_height }}"
                            alt="{{ $entry->title }}"
                        />
                    </a>
                </figure>
            </div>
        @endisset

        <div class="card-content">
            <h2
                class="title is-2 entry-title"
                itemprop="headline"
            >
                <a href="{!! $entry->url !!}">
                    {!! $entry->title !!}
                </a>
            </h2>

            @include('post.meta')

            <div
                class="entry-preview content block"
                itemprop="abstract"
            >
                {!! $entry->preview !!}
            </div>

            <div class="entry-read-more block">
                <a
                    class="button is-info"
                    href="{!! $entry->url !!}"
                >{{ site()->trans('entries.readMore') }}</a>
            </div>
        </div>
    </div>
</article>
