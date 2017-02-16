@extends('admin.index')


@section('content')
    <div class="container-fluid">
         <div class="row">
                <div class="col-md-2">Name</div>
                <div class="col-md-2">Email</div>
                <div class="col-md-2">Website</div>
                <div class="col-md-4">Message</div>
                <div class="col-md-2">Date</div>
            </div>
        @foreach ($messages as $item)
            <div class="row mb-3">
                <div class="col-md-2" style="word-wrap: break-word">{{$item->name}}</div>
                <div class="col-md-2" style="word-wrap: break-word">{{$item->email}}</div>
                <div class="col-md-2" style="word-wrap: break-word">{{$item->site}}</div>
                <div class="col-md-4" style="word-wrap: break-word">{{$item->text}}</div>
                <div class="col-md-2">{{$item->created_at}}</div>
            </div>
        @endforeach
    </div>

    {{ $messages->render() }}

@endsection