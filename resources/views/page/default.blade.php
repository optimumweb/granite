@extends('layouts.default', [
    'meta' => [
        'title' => $entry->title,
    ],
])

@section('content')
    <section class="section">
        <div class="container">
            @include('partials.page')
        </div>
    </section>
@endsection
