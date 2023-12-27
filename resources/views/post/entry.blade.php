<article
    id="entry-{{ $entry->id }}"
    class="entry post block"
    itemscope
    itemtype="https://schema.org/Article"
>
    <div class="card block">
        @include('post.cover')

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
                <h3 class="title is-3">
                    {{ site()->trans('entries.author.title') }}
                </h3>

                <p>
                    {!! $authorProfile->bio !!}
                </p>
            </div>
        </div>
    @endif
</article>
