@extends('layouts.default', [
    'meta' => [
        'title' => $entry->title,
    ],
])

@section('content')
    {!! $entry->html !!}
@endsection
