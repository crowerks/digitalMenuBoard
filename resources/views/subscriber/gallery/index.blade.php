@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    <div id="page-content-wrapper" class="row">
        @if(session()->has('updated'))
            <div class="alert alert-success">
                {{ session()->get('updated')}}
            </div>
        @endif
        {!! Form::open(['method' => 'POST', 'action' => 'GalleryController@store', 'files' => true])  !!}

        <div class="form-group">
            {!! Form::label('file', 'Insert Image', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-6">
                {!! Form::file('file', ['class'=> 'form-control']) !!}
            </div>
        </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <br/>
                    {!! Form::submit('Upload Photo', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

    @foreach($images as $image)

        <div class="col-xs-4 col-sm-2">
            <br/>
            <img src="../images/{{$image->image_path}}" class="img-thumbnail img-responsive" alt="Images">
        </div>


    @endforeach
    </div>
@endsection