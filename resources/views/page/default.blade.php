@extends('layouts.default', [
    'meta' => [
        'title' => $entry->title,
    ],
])

@section('content')
    @include('partials.page')
@endsection
