@extends('admin.index');

@section('content')
    <h1>About us</h1>
    {!! Form::open(['route'=>'admin.title', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
    <div class="form-group row">
        {!! Form::label('title', 'Title', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::textarea('title', $title['title'], ['class'=>'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Send') !!}
    {!! Form::close() !!}
@endsection