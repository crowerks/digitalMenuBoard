
@extends('layouts.backend')

@section('content')

    <admin-widget></admin-widget>
    <div id="page-content-wrapper">
        @if(session()->has('updated'))
            <div class="alert alert-success">
                {{ session()->get('updated')}}
            </div>
        @endif
        @if(session()->has('deleted'))
            <div class="alert alert-danger">
                {{ session()->get('deleted')}}
            </div>
        @endif
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
                    {!! Form::select('role_id', [1 => 'Administrator', 2 => 'Subscriber'], null, ['placeholder' => 'Role']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                  {!! Form::close() !!}
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                  </div>
            </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this user?</p>
          </div>
          <div class="modal-footer">
            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminController@destroy', $user->id]])  !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'id' => 'modal-delete-button']) !!}
            {!! Form::close() !!}
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="modal-no-button">No</button>
          </div>
        </div>

      </div>
    </div>


    @endforeach
    </div>
@endsection
