@extends('admin.index');

@section('content')
    <h2>{{ url($page->alias) }}</h2>

    {!! Form::open(['route'=>'admin.pages.'.$page->alias, 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
    <div class="form-group row">
        {!! Form::label('pageText', 'Text', ['class'=>'col-2 col-form-label']) !!}
        <div class="col-10">
            {!! Form::textarea('pageText', $page->text, ['class'=>'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Save') !!}
    {!! Form::close() !!}

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'pageText' );
    </script>
@endsection