@extends('backend')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <h1 h1 class="page-header">{{ $review->title }}</h1>

    <article>
        {{ $review->body }}
    </article>
</div>
@stop