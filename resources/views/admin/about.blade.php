@extends('admin.index');

@section('content')
    <h1>About us</h1>
    {!! Form::open(['route'=>'admin.about', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group row">
        {!! Form::label('aboutText', 'Text', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::textarea('aboutText', $about, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Html::image('/img/3.jpg?'.rand(), '', ['class'=>'img-fluid col-10 offset-2', 'style'=>'max-height: 100%; max-width:100%']) !!}
        {!! Form::label('aboutImg', 'Image', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::file('aboutImg', ['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-12">
        </div>
    </div>
    {!! Form::submit('Send') !!}
    {!! Form::close() !!}
@endsection