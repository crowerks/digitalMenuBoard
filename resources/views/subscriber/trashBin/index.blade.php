@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    @foreach($products as $product)
        {{$product->flavor}}
        {!! Form::model($product, ['method' => 'PATCH', 'action' => ['TrashBinController@update', $product->id]])  !!}
        {!! Form::submit('Restore', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['TrashBinController@destroy', $product->id]])  !!}
        {!! Form::submit('Delete Post', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}

    @endforeach
@endsection
