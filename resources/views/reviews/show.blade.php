@extends('app')

@section('content')

    <h1>{{ $review->title }}</h1>

    <article>
        {{ $review->body }}
    </article>

@stop