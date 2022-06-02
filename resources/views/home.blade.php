@extends('layouts.default')

@section('content')
    <section class="section">
        <div class="container">
            @if ($posts = $site->entries('post')->paginate(5))
                @foreach($posts as $entry)
                    @include('partials.post')
                @endforeach

                {{ $posts->appends(request()->input())->links() }}
            @endif
        </div>
    </section>
@endsection
