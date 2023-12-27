<article
    id="entry-{{ $entry->id }}"
    class="entry post block"
    itemscope
    itemtype="https://schema.org/Article"
>
    <div class="card block">
        @isset($entry->cover)
            <div class="card-image">
                <figure class="entry-cover image block">
                    <img
                        src="{{ $entry->cover->url }}"
                        width="{{ $entry->cover->image_width }}"
                        height="{{ $entry->cover->image_height }}"
                        alt="{{ $entry->title }}"
                    />
                </figure>
            </div>
        @endisset

        <div class="card-content">
            <h1
                class="title is-1 entry-title"
                itemprop="headline"
            >
                {!! $entry->title !!}
            </h1>

            @include('post.meta')

            <div
                class="entry-content content block"
                itemprop="articleBody"
            >
                {!! $entry->content !!}
            </div>
        </div>
    </div>

    @if ($authorProfile = $entry->author->getProfile($entry->locale))
        <div
            class="entry-author card block"
            itemprop="abstract"
        >
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <h3 class="title is-3">
                            {{ site()->trans('entries.author.title') }}
                        </h3>

                        <p>
                            {!! $authorProfile->bio !!}
                        </p>
                    </div>

                    <div class="media-right">
                        <figure class="image is-128x128">
                            @isset($entry->author->photo?->url)
                                <img
                                    class="is-rounded"
                                    src="{{ $entry->author->photo->url }}"
                                    width="{{ $entry->author->photo->image_width }}"
                                    height="{{ $entry->author->photo->image_height }}"
                                    alt="{{ $entry->author }}"
                                />
                            @else
                                <img
                                    class="is-rounded"
                                    src="{{ $entry->author->gravatar_url }}?s=128"
                                    width="128"
                                    height="128"
                                    alt="{{ $entry->author }}"
                                />
                            @endisset
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    @endif
</article>
