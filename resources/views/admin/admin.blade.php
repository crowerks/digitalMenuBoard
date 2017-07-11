@extends('layouts.app')

@section('content')
    {{--<div class="admin-widget">--}}
        {{--<div class="btn-group-vertical" role="group" aria-label="...">--}}
            {{--<a href="{{ url('admin/register') }}"> <button type="button" class="btn btn-default">Register</button></a>--}}
            {{--<a href="{{ url('admin/show') }}"> <button type="button" class="btn btn-default">Users</button></a>--}}
        {{--</div>--}}
        <admin-widget></admin-widget>

@endsection

    {{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
    {{--@if (Auth::check() && Auth::user()->isAdmin())--}}

    {{--@elseif (Auth::guest())--}}


    {{--@endif--}}
    {{--</div>--}}
    {{--@endif--}}