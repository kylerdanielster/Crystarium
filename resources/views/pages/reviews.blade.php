@extends('app')


@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <h1 class="page-header">Reviews</h1>
    </div>
<hr/>
@foreach($reviews as $review)
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    {{--need to change these route to a pages route--}}
    <article>
        <h2>
            <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
        </h2>

        <div class="body">{{ $review->body }}</div>
    </article>
    </div>
@endforeach

    @stop
