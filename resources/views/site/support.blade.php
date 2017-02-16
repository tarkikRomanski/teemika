@extends('index')

@section('content')

    @section('header')
        @include('layouts.headerB')
    @show

    <div class="container" id="wrap-supports">
        <div class="row">
            {!! $page->text !!}
        </div>
    </div>


    @section('contacts')
        @include('layouts.contacts')
    @show

<script>
    $('h1').after('<p class="support-title col-sm-12">'+ $('h1').html()+'</p>');
    $('h1').remove();
    $('ul').addClass('col-12');
</script>

@endsection