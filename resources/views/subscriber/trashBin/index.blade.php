@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>

    <div id="page-content-wrapper">
        <div class="col-sm-offset-4">
            <h2> Trash Bin </h2>
        </div>
        @if(session()->has('restored'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('restored')}}
            </div>
        @endif
        @if(session()->has('deleted'))
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('deleted') }}
            </div>
        @endif

    @foreach($specials as $special)
            {!! Form::model($special, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['TrashBinController@update', $special->id]])  !!}
            <div class="form-group lightGray">
                <label for="special" class="control-label col-sm-2">Special</label>
                <div class="col-sm-6">
                    <h4 id="special">{{$special->special}}</h4>

                </div>
            </div>
            <div class="form-group lightGray">
                <label for="pricing" class="control-label col-sm-2">Price</label>
                <div class="col-sm-6">
                    <h4 id="pricing">${{$special->pricing}}</h4>
                </div>
            </div>

            <div class="form-group">
                <div class=" col-sm-10">
                    {!! Form::submit('Restore', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'DELETE', 'action' => ['TrashBinController@update', $special->id]])  !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'delete-button']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

    @endforeach
    </div>
@endsection
