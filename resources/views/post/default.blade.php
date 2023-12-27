@extends('layouts.default', [
    'meta' => [
        'title' => $entry->title,
    ],
])

@section('content')
    @include('post.entry')
@endsection
