@extends('layouts.default')

@section('content')
    @isset($entry)
        {!! $entry->html !!}
    @else
        <section class="section">
            <div class="container">
                @if ($posts = $site->entries('post')->paginate(5))
                    @foreach($posts as $entry)
                        @include('partials.post')
                    @endforeach

                    {{ $posts->appends(request()->input())->links('partials.pagination') }}
                @endif
            </div>
        </section>
    @endisset
@endsection
