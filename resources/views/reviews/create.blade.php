@extends('app')

@section('content')

    <h1>New Review</h1>
    <hr/>

    {!! Form::open(['url' => 'reviews']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Name:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Review', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

    @include('errors.list')

@stop