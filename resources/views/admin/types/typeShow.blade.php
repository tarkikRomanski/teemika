@extends('admin.index');

@section('content')

    @foreach($types as $item)
        {!! Form::open(['route'=>'admin.types', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        <div class="form-group row">
            {!! Form::label('typeTitle', 'Title', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::text('typeTitle', $item->title, ['class'=>'form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('typeId', $item->id) !!}
        {!! Form::submit('Save', ['class'=>'btn btn-block']) !!}
        <hr/>
        {!! Form::close() !!}
    @endforeach

@endsection