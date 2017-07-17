
@extends('layouts.backend')

@section('content')

    <admin-widget></admin-widget>
    <div id="page-content-wrapper">
        @foreach($users as $user)
            {!! Form::model($user, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['AdminController@update', $user->id]] )  !!}
            <div class="form-group">

                {!! Form::label('userName', 'User Name', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role', ['class' => 'control-label col-sm-2']) !!}

                <div class="col-sm-10">
                    {!! Form::select('role_id', [1 => 'Administrator', 2 => 'Subscriber'], null, ['placeholder' => 'Role']) !!};
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminController@destroy', $user->id]])  !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'delete-button']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach
    </div>

@endsection