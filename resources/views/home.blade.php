@extends('layouts.default')

@section('content')
    @isset($entry)
        {!! $entry->html !!}
    @else
        @if ($posts = $site->entries('post')->paginate(5))
            <section class="section">
                <div class="container">
                    <div class="columns">
                        @foreach($posts as $entry)
                            <div class="column is-6">
                                @include('post.preview')
                            </div>
                        @endforeach
                    </div>

                    {{ $posts->appends(request()->input())->links('partials.pagination') }}
                </div>
            </section>
        @endif
    @endisset
@endsection
