@extends('admin.index')

@section('content')

    <h1>How</h1>
    @foreach($help as $item)
        {!! Form::open(['route'=>'admin.help', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        {!! Html::image('/img/icon_'.$help->currentPage().'.png') !!}
        <div class="form-group row">
            {!! Form::label('helpText', 'Text', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::text('helpText', $item->text, ['class'=>'form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('helpId', $item->id) !!}
        {!! Form::submit('Save', ['class'=>'btn btn-block']) !!}
        <hr/>
        {!! Form::close() !!}
    @endforeach
    {{ $help->render() }}
@endsection