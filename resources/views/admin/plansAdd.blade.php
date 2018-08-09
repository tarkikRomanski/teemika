@extends('admin.index')

@section('content')

    @if($resultat == 1)
        <div class="alert alert-success" role="alert">
            {!! $complateText !!}
        </div>
    @elseif($resultat == 2)
        <div class="alert alert-danger" role="alert">
            {!! $errorText !!}
        </div>
    @endif

    {!! Form::open(['route'=>'admin.plans.add', 'method'=>'post']) !!}
        <div class="form-group row">
            {!! Form::label('planTitle', 'Title', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::text('planTitle', old('planTitle'), ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('planPrice', 'Price', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::number('planPrice', old('planPrice'), ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                {!! Form::checkbox('planDisplay', 1, null, ['class'=>'form-check-input']) !!}
                Display plans
            </label>
        </div>

        <div class="form-group row">
            {!! Form::label('planText', 'Text', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::textarea('planText', old('planText'), ['class'=>'form-control']) !!}
            </div>
        </div>
    {!! Form::submit('Add', ['class'=>'btn btn-block']) !!}
    {!! Form::close() !!}

@endsection