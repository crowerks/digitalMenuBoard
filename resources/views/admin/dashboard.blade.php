@extends('layouts.app')

@section('content')
    <div class="admin-widget">
        <div class="btn-group-vertical" role="group" aria-label="...">
            <a href="{{url('admin')}}"> <button type="button" class="btn btn-default">Dashboard</button></a>
            <a href="{{url('admin/register')}}"> <button type="button" class="btn btn-default">Register</button></a>
            <a href="{{url('admin/show')}}"> <button type="button" class="btn btn-default">Users</button></a>
        </div>
    </div>
@endsection
