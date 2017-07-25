@extends('layouts.backend')

@section('content')
    <subscriber-widget></subscriber-widget>
    <div id="page-content-wrapper">
        @if(session()->has('updated'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session()->get('updated')}}
            </div>
        @endif
        </div><div class="col-sm-offset-2 col-sm-10">
             <h2> Update Product Heading </h2>
        </div>
        @foreach($headings as $heading)

            {!! Form::model($heading, ['class' => 'form-horizontal', 'method' => 'PATCH', 'action' => ['HeadingController@update', $heading->id]])  !!}
            <div class="form-group">
                {!! Form::label('products', 'Product Heading', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('products', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('pricing', 'Pricing Heading', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pricing', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('specials', 'Specials Heading', ['class' => 'control-label col-sm-2']) !!}
                <div class="col-sm-6">
                    {!! Form::text('specials', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

        @endforeach
    <h3>Menu Board Examples:</h3>
    <div class="col-xs-12 col-sm-4">
        <br/>
        <img src="../images/products-heading.jpg" class="img-thumbnail img-responsive" alt="Images">
    </div>
    <div class="col-xs-12 col-sm-4">
        <br/>
        <img src="../images/pricing-heading.jpg" class="img-thumbnail img-responsive" alt="Images">
    </div>
    <div class="col-xs-12 col-sm-4">
        <br/>
        <img src="../images/specials-heading.jpg" class="img-thumbnail img-responsive" alt="Images">
    </div>
    </div>
@endsection
