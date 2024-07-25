@extends('layouts.default', [
    'meta' => [
        'title' => $entry->metadata['title'] ?? $entry->title,
    ],
])

@section('content')
    {!! $entry->html !!}
@endsection
