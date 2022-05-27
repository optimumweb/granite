@extends('layouts.default')

@section('content')
    <div class="container">
        @foreach(\App\Models\Entry::byType('post')->get() as $post)
            <article
                    id="entry-{{ $post->id }}"
                    class="entry post"
                    itemscope
                    itemtype="https://schema.org/Article"
            >
                <h2
                    class="title is-2 entry-title"
                    itemprop="headline"
                >
                    {!! $post->title !!}
                </h2>

                <div class="entry-meta">
                    <span
                        class="entry-published-at"
                        itemprop="datePublished"
                    >
                        {{ $post->published_at }}
                    </span>

                    <span
                        class="entry-author"
                        itemprop="author"
                    >
                        {{ $post->author }}
                    </span>
                </div>

                <div
                    class="entry-content"
                    itemprop="articleBody"
                >
                    {!! $post->content !!}
                </div>
            </article>
        @endforeach
    </div>
@endsection
