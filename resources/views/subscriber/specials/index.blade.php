@extends('layouts.backend')

@section('content')



    <subscriber-widget></subscriber-widget>
    <div id="page-content-wrapper">
        <div class="col-sm-offset-2 col-sm-10">
            <h2> Create New Special </h2>
        </div>
    {!! Form::open(['class' => 'form-horizontal', 'method' => 'POST', 'action' => 'SpecialController@store'])  !!}
    <div class="form-group">
        {!! Form::label('special', 'Special', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-6">
            {!! Form::text('special', null, ['class'=> 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Create Post', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
        <div class="col-sm-offset-2 col-sm-10">
            <h2> Update Specials </h2>
        </div>
    @foreach($specials as $special)
        {!! Form::model($special, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['SpecialController@update', $special->id]])  !!}

            <div class="form-group">

                {!! Form::label('special', 'Special', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('special', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('active', 'Active', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-10">
                    {!! Form::select('active', [ 0 => 'None', 1 => 'Activate', 2 => 'Deactivate'], null, ['placeholder' => 'None']) !!}
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['SpecialController@destroy', $special->id]])  !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'delete-button']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
    @endforeach
    </div>
@endsection
