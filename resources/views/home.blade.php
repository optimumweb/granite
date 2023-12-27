@extends('layouts.default')

@section('content')
    @isset($entry)
        {!! $entry->html !!}
    @else
        @if ($posts = $site->entries('post')->paginate(5))
            <div class="columns">
                @foreach($posts as $entry)
                    <div class="column is-6">
                        @include('post.preview')
                    </div>
                @endforeach
            </div>

            {{ $posts->appends(request()->input())->links('partials.pagination') }}
        @endif
    @endisset
@endsection
