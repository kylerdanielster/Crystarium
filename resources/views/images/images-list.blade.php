@extends('app')

@section('content')
    {{--<h1>About: {{ $name  }}</h1>--}}
    <h1 class="page-header">Gallery</h1>
    <div class="row">
        @if(count($images) > 0)
            <div class="col-md-12 text-center" >
                @include('images.error-notification')
            </div>
        @endif
        @forelse($images as $image)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="{{asset($image->file)}}" />
                        <p>
                        <div class="row text-center" style="padding-left:1em;">
                            {!! Form::open(['url'=>'/gallery/'.$image->id, 'class'=>'pull-left']) !!}
                            {!! Form::close() !!}
                        </div>
                        </p>
                    </div>
            </div>
        @empty
            <p>No images yet</p>
        @endforelse
    </div>
    <div align="center">{!! $images->render() !!}</div>
@stop