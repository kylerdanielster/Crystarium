@extends('app')

@section('content')
    @include('images.error-notification')
    <h1>Upload Image</h1>
    <hr/>

    {!! Form::open(['url'=>'/gallery', 'method'=>'POST', 'files'=>'true']) !!}

    <div class="form-group">
        <label for="userfile">Image File</label>
        <input type="file" class="form-control" name="userfile">
    </div>

    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" class="form-control" name="caption" value="">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
    <a href="{{ url('/gallery') }}" class="btn btn-warning">Cancel</a>

    {!! Form::close() !!}
@stop
