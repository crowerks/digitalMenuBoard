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
        <h2> Update Prices and Size </h2>
    </div>
    @foreach($prices as $price)
        {!! Form::model($price, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['PricingController@update', $price->id]])  !!}
        <div class="form-group">
            {!! Form::label('size', 'Size', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-6">
                {!! Form::text('size', null, ['class'=> 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-6">
                {!! Form::text('price', null, ['class'=> 'form-control']) !!}
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