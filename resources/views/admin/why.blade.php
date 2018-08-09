@extends('admin.index')

@section('content')
    <h1>Why</h1>
    @foreach($why as $item)
        {!! Form::open(['route'=>'admin.why', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        {!! Html::image('/img/w'.$why->currentPage().'.png') !!}
        <div class="form-group row">
            {!! Form::label('whyTitle', 'Title', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::text('whyTitle', $item->title, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('whyText', 'Description', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::textarea('whyText', $item->text, ['class'=>'form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('whyId', $item->id) !!}
        {!! Form::submit('Save', ['class'=>'btn btn-block']) !!}
        <hr/>
        {!! Form::close() !!}
    @endforeach
    {{ $why->render() }}
@endsection