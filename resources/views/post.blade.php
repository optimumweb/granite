@extends('layouts.default')

@section('content')
    <article class="entry post box block">
        <h2 class="entry-title">
            {!! $entry->title !!}
        </h2>

        <div class="entry-meta">
            <span class="entry-author">
                {{ $entry->author }}
            </span>

            <span class="entry-published-at">
                {{ $entry->published_at }}
            </span>
        </div>

        <div class="entry-content">
            {!! $entry->content !!}
        </div>
    </article>
@endsection
