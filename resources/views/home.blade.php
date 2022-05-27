@extends('layouts.default')

@section('content')
    <section class="section">
        <div class="container">
            @foreach(site()->entries('post')->get() as $post)
                @include('partials.post')
            @endforeach
        </div>
    </section>
@endsection
