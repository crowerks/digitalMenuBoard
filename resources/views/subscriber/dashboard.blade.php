@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    <h1 class="dashboard-heading"> Welcome {{ Auth::user()->name }}</h1>
@endsection
