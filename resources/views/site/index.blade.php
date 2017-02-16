@extends('index')

@section('content')

    @section('header')
        @include('layouts.header')
    @show

    @section('top')
        @include('layouts.topWrap')
    @show

    @section('services')
        @include('layouts.services')
    @show

    @section('about')
        @include('layouts.aboutus')
    @show

    @section('why')
        @include('layouts.why')
    @show

    @section('how')
        @include('layouts.how')
    @show

    @section('plan')
        @include('layouts.plan')
    @show

    @section('contacts')
        @include('layouts.contacts')
    @show

@endsection