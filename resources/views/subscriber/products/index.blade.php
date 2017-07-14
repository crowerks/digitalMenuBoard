@extends('layouts.app');

@section('content')
    <subscriber-widget></subscriber-widget>
    {!! Form::open(['method' => 'POST', 'action' => 'ProductsController@store'])  !!}

    <div class="form-group">
        {!! Form::label('flavor', 'Title:') !!}
        {!! Form::text('flavor', null, ['class'=> 'form-control'])!!}
        {!! Form::label('order', 'Order:') !!}
        {!! Form::text('order', null, ['class'=> 'form-control'])!!}

    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @foreach($products as $product)
        {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $product->id]])  !!}
        {!! Form::label('flavor', 'Flavor:') !!}
        {!! Form::text('flavor', null, ['class'=> 'form-control']) !!}
        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['ProductsController@destroy', $product->id]])  !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    @endforeach

@endsection