@extends('admin.index')

@section('content')
    @foreach($orders as $data)
        <p>Name: {{ $data->name }}</p>
        <p>Email: {{ $data->email }}</p>
        <p>Website: {{ $data->site }}</p>
        <p>Type of Assistant: {!! $data->type  !!} </p>
        <p>Price plan: {{ $data->price }}</p>
        <p>Language of Assistant: {{ $data->language }}</p>
        <p>Core responsibilites\task: {{ $data->core }}</p>
        <p>Message: {{ $data->message }}</p>
    @endforeach
    {{ $orders->render() }}
@endsection