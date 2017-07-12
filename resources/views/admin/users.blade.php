@extends('layouts.app')

@section('content')
    <admin-widget></admin-widget>
    <h1>Edit Posts</h1>
    @foreach($users as $user)
        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminController@update', $user->id]])  !!}
        {!! Form::label('role_id', 'Name:') !!}
        {!! Form::text('name', null, ['class'=> 'form-control']) !!}

        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', [1 => 'Administrator', 2 => 'Subscriber'], null, ['placeholder' => 'Role']) !!};

        {!! Form::submit('Update role_id', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}


        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminController@destroy', $user->id]])  !!}
        {!! Form::submit('Delete Post', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    @endforeach


@endsection