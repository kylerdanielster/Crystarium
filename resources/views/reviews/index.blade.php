@extends('app')

@section('content')

    <h1>Reviews</h1>

    <hr/>
    @foreach($reviews as $review)
        <article>
            <h2>
                <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
            </h2>

            <div class="body">{{ $review->body }}</div>
        </article>
    @endforeach
@stop