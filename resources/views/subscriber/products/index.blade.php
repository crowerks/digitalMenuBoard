@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    <div id="page-content-wrapper">
        <div class="col-sm-offset-2 col-sm-10">
            <h2> Update Product Information </h2>
        </div>
    @foreach($products as $product)
        {!! Form::model($product, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['ProductsController@update', $product->id]])  !!}
        <div class="form-group">
            {!! Form::label('flavor', 'Flavor', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-6">
                {!! Form::text('flavor', null, ['class'=> 'form-control']) !!}
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--{!! Form::label('order', 'Order', ['class' => 'control-label col-sm-2']) !!}--}}
            {{--<div class="col-sm-6">--}}
                {{--{!! Form::text('order', null, ['class'=> 'form-control']) !!}--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach
    </div>
@endsection