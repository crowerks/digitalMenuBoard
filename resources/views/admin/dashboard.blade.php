@extends('layouts.backend')

@section('content')
    <admin-widget></admin-widget>
    <div id="page-content-wrapper">
      <h1 class="dashboard-heading"> Welcome {{ Auth::user()->name }}</h1>
    </div>
@endsection
