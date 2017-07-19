@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    <div id="page-content-wrapper">
       {{--<form class="form-horizontal">--}}
            {{--{!! Form::open(['method' => 'POST', 'action' => 'HeadingController@store', 'files' => true])  !!}--}}

            {{--<div class="form-group">--}}
                {{--{!! Form::label('fi;e', 'Insert Image', ['class' => 'control-label col-sm-2']) !!}--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Form::file('file', ['class'=> 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('products', 'Product Heading', ['class' => 'control-label col-sm-2']) !!}--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Form::text('products', null, ['class'=> 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('pricing', 'Pricing Heading', ['class' => 'control-label col-sm-2']) !!}--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Form::text('pricing', null, ['class'=> 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('specials', 'Specials Heading', ['class' => 'control-label col-sm-2']) !!}--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Form::text('specials', null, ['class'=> 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}


        {{--<div class="form-group">--}}
            {{--<div class="col-sm-offset-2 col-sm-10">--}}
                 {{--{!! Form::submit('Create Post', ['class' => 'btn btn-success']) !!}--}}
                 {{--{!! Form::close() !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--</form>--}}
        <div class="col-sm-offset-2 col-sm-10">
             <h2> Update Product Heading </h2>
        </div>
        @foreach($headings as $heading)

            {!! Form::model($heading, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['HeadingController@update', $heading->id]])  !!}
            <div class="form-group">
                {!! Form::label('products', 'Product Heading', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('products', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('pricing', 'Pricing Heading', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pricing', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('specials', 'Specials Heading', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('specials', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

        @endforeach
    </div>
@endsection
