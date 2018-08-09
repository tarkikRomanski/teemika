@extends('admin.index');

@section('content')
    <h1>Contact</h1>

    <h2>Phones</h2>
    @foreach($phones as $item)
        {!! Form::open(['route'=>'admin.contact.edit', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
            <div class="form-group row">
                {!! Form::label('phoneTitle', 'Title', ['class'=>'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('phoneTitle', $item->title, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('phoneNumber', 'Number', ['class'=>'col-2 col-form-label']) !!}
                <div class="col-10">
                    {!! Form::text('phoneNumber', $item->number, ['class'=>'form-control']) !!}
                </div>
            </div>
            {!! Form::hidden('type', '1') !!}
            {!! Form::hidden('phoneId', $item->id) !!}
            {!! Form::submit('Send') !!}
            <hr>
        {!! Form::close() !!}
    @endforeach
    <h2>Email</h2>
    @foreach($email as $item)
        {!! Form::open(['route'=>'admin.contact.edit', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        <div class="form-group row">
            {!! Form::label('emailTitle', 'Email', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::text('emailTitle', $item->title, ['class'=>'form-control']) !!}
            </div>
        </div>

        {!! Form::hidden('type', '2') !!}
        {!! Form::hidden('emailId', $item->id) !!}
        {!! Form::submit('Send') !!}
        <hr>
        {!! Form::close() !!}
    @endforeach
    <hr>

    <h2>Address</h2>
    @foreach($address as $item)
        {!! Form::open(['route'=>'admin.contact.edit', 'method'=>'post', 'class'=>'col-sm-12 mt-3 mb-3']) !!}
        <div class="form-group row">
            {!! Form::label('addressTitle', 'Address', ['class'=>'col-2 col-form-label']) !!}
            <div class="col-10">
                {!! Form::text('addressTitle', $item->title, ['class'=>'form-control']) !!}
            </div>
        </div>

        {!! Form::hidden('type', '3') !!}
        {!! Form::hidden('addressId', $item->id) !!}
        {!! Form::submit('Send') !!}
        <hr>
        {!! Form::close() !!}
    @endforeach
    <hr>
@endsection