@extends('admin.index')

@section('content')

    <h1>How</h1>
    @foreach($how as $k=>$item)
        {!! Form::open(['route'=>'admin.how', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        {!! Html::image('/img/h'.$how->currentPage().'.png') !!}
        <div class="form-group row">
            {!! Form::label('howText', 'Text', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::textarea('howText', $item->text, ['class'=>'form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('howId', $item->id) !!}
        {!! Form::submit('Save', ['class'=>'btn btn-block']) !!}
        <hr/>
        {!! Form::close() !!}
    @endforeach
    {{ $how->render() }}
@endsection