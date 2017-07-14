@extends('layouts.app');

@section('content')
    <subscriber-widget></subscriber-widget>
    {!! Form::open(['method' => 'POST', 'action' => 'PricingController@store'])  !!}

    <div class="form-group">
        {!! Form::label('price', 'Pricing') !!}
        {!! Form::text('price', null, ['class'=> 'form-control']) !!}

        {!! Form::label('size', 'Size') !!}
        {!! Form::text('size', null, ['class'=> 'form-control']) !!}


    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @foreach($prices as $price)
        {!! Form::model($price, ['method' => 'PATCH', 'action' => ['PricingController@update', $price->id]])  !!}
        {!! Form::label('size', 'Size') !!}
        {!! Form::text('size', null, ['class'=> 'form-control']) !!}
        {!! Form::label('price', 'Pricing') !!}
        {!! Form::text('price', null, ['class'=> 'form-control']) !!}



        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['PricingController@destroy', $price->id]])  !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    @endforeach

@endsection