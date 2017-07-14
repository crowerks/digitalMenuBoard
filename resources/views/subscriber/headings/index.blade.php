@extends('layouts.app');

@section('content')
    <subscriber-widget></subscriber-widget>
    {!! Form::open(['method' => 'POST', 'action' => 'HeadingController@store'])  !!}

    <div class="form-group">
        {!! Form::label('products', 'Product Heading') !!}
        {!! Form::text('products', null, ['class'=> 'form-control']) !!}

        {!! Form::label('pricing', 'Pricing Heading') !!}
        {!! Form::text('pricing', null, ['class'=> 'form-control']) !!}

        {!! Form::label('specials', 'Specials Heading') !!}
        {!! Form::text('specials', null, ['class'=> 'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @foreach($headings as $heading)
        {!! Form::model($heading, ['method' => 'PATCH', 'action' => ['HeadingController@update', $heading->id]])  !!}
        {!! Form::label('products', 'Product Heading') !!}
        {!! Form::text('products', null, ['class'=> 'form-control']) !!}

        {!! Form::label('pricing', 'Pricing Heading') !!}
        {!! Form::text('pricing', null, ['class'=> 'form-control']) !!}

        {!! Form::label('specials', 'Specials Heading') !!}
        {!! Form::text('specials', null, ['class'=> 'form-control']) !!}

        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['HeadingController@destroy', $heading->id]])  !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    @endforeach

@endsection