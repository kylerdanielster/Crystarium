@extends('app')

@section('content')
    <h1>Edit: {!! $review->title !!}</h1>
    <hr/>

    {!! Form::model($review, ['method' => 'PATCH', 'action' => ['ReviewsController@update', $review->id]]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Name:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Review', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop