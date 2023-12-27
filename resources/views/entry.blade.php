@extends('layouts.default', [
    'meta' => [
        'title' => $entry->title,
    ],
])

@section('content')
    <section class="section">
        <div class="container">
            @include('post.entry')
        </div>
    </section>
@endsection
