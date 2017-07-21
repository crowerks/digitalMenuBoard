@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    <div id="page-content-wrapper">
        @if(session()->has('updated'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('updated')}}
            </div>
        @endif
        <div class="col-sm-offset-2 col-sm-10">
            <h2> Update Product Information </h2>
        </div>
    @foreach($products as $product)
        {!! Form::model($product, ['class' => 'form-horizontal', 'method' => 'POST', 'action' => ['ProductsController@updateBatch']])  !!}
        <div class="form-group">
            {!! Form::label('flavor', 'Flavor', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-6">
                {!! Form::text('flavor[]', null, ['class'=> 'form-control', 'id' => $product->id]) !!}
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--{!! Form::label('flavor_order', 'Order', ['class' => 'control-label col-sm-2']) !!}--}}
            {{--<div class="col-sm-6">--}}
                {{--{!! Form::text('flavor_order[]', null, ['class'=> 'form-control', 'id' => $product->id]) !!}--}}
            {{--</div>--}}
        {{--</div>--}}

    @endforeach
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
    </div>
@endsection