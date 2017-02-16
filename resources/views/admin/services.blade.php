@extends('admin.index')

@section('content')
    <h1>Services</h1>
    @foreach($services as $service)
        {!! Form::open(['route'=>'admin.services', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        <div class="form-group row">
                {!! Form::label('serviceTitle', 'Title', ['class'=>'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('serviceTitle', $service->title, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('serviceDescr', 'Description', ['class'=>'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::textarea('serviceDescr', $service->descr, ['class'=>'form-control']) !!}
                </div>
            </div>
        {!! Form::hidden('serviceId', $service->id) !!}
        {!! Form::submit('Save', ['class'=>'btn btn-block']) !!}
        <hr/>
        {!! Form::close() !!}
    @endforeach
    {{ $services->render() }}
@endsection