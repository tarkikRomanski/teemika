@extends('admin.index')

@section('content')
    @foreach($plans as $plan)
    {!! Form::open(['route'=>'admin.plans.edit', 'method'=>'post']) !!}
    <div class="form-group row">
        {!! Form::label('planTitle', 'Title', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::text('planTitle', $plan->title, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('planPrice', 'Price', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::number('planPrice', $plan->price, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            {!! Form::checkbox('planDisplay', 1, ($plan->display==0)?null:true, ['class'=>'form-check-input']) !!}
            Display plans
        </label>
    </div>

    <div class="form-group row">
        {!! Form::label('planText', 'Text', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::textarea('planText', $plan->text, ['class'=>'form-control']) !!}
        </div>
    </div>
    {!! Form::hidden('planId', $plan->id) !!}
    {!! Form::submit('Edit', ['class'=>'btn btn-block']) !!}
    {!! Form::close() !!}
@endforeach
    {{ $plans->render() }}
@endsection