@extends('app')

@section('content')
    {{--<h1>About: {{ $name  }}</h1>--}}
    <h1 class="page-header">Gallery</h1>
    <div class="row">
        @if(count($images) > 0)
            <div class="col-md-12 text-center" >
                <a href="{{ url('/gallery/create') }}" class="btn btn-primary" role="button">
                    Add New Image
                </a>
                <hr />
                @include('images.error-notification')
            </div>
        @endif
        @forelse($images as $image)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="{{asset($image->file)}}" />

                        <p>
                        <div class="row text-center" style="padding-left:1em;">
                            <span class="pull-left">&nbsp;</span>
                            {!! Form::open(['url'=>'/gallery/'.$image->id, 'class'=>'pull-left']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                            {!! Form::close() !!}
                        </div>
                        </p>
                    </div>

            </div>
        @empty
            <p>No images yet, <a href="{{ url('/gallery/create') }}">add a new one</a>?</p>
        @endforelse
    </div>
    <div align="center">{!! $images->render() !!}</div>
@stop