<article
    id="entry-{{ $entry->id }}"
    class="entry post block"
    itemscope
    itemtype="https://schema.org/Article"
>
    <div class="columns">
        <div class="column">
            <div class="card block">
                @isset($entry->cover)
                    <div class="card-image">
                        <figure class="entry-cover image is-16by9 block">
                            <img
                                class="is-constrained"
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
                        {!! $entry->html !!}
                    </div>
                </div>
            </div>
        </div>

        @if ($authorProfile = $entry->author->getProfile($entry->locale))
            <div class="column is-4">
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

                                <div class="entry-author-bio content block">
                                    {!! $authorProfile->bio !!}
                                </div>
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

                        @if ($entry->author->links->count() > 0)
                            <div class="entry-author-links field is-grouped is-grouped-multiline">
                                @foreach ($entry->author->links as $authorLink)
                                    <div class="control">
                                        <a
                                            class="button"
                                            href="{{ $authorLink->url }}"
                                            target="_blank"
                                        >
                                            <span>{{ $authorLink->title }}</span>
                                            <span class="icon"><i class="fas fa-external-link"></i></span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</article>
