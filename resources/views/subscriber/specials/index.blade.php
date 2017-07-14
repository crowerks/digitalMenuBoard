@extends('layouts.app');

@section('content')
    <subscriber-widget></subscriber-widget>
    {!! Form::open(['method' => 'POST', 'action' => 'SpecialController@store'])  !!}

    <div class="form-group">
        {!! Form::label('special', 'Special') !!}
        {!! Form::text('special', null, ['class'=> 'form-control']) !!}




    </div>
    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @foreach($specials as $special)
        {!! Form::model($special, ['method' => 'PATCH', 'action' => ['SpecialController@update', $special->id]])  !!}
        {!! Form::label('special', 'Special') !!}
        {!! Form::text('special', null, ['class'=> 'form-control']) !!}



        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['SpecialController@destroy', $special->id]])  !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    @endforeach

@endsection
