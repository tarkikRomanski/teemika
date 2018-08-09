@extends('index')

@section('content')

    @section('header')
        @include('layouts.headerB')
    @show

    @section('order')

        <h2><span class="oq"></span>Price<span class="cq"></span></h2>

        <div class="container" id="wrap-order">
            <div class="row">
                <div class="col-12">
                {!! Form::open(['route'=>'order', 'method'=>'post', 'id'=>'order-form']) !!}

                <p>
                    {!! Form::label('userName', 'Your full name(required)*') !!}
                </p>
                <p>
                    {!! Form::text('userName', old('userName')) !!}
                </p>

                <p>
                    {!! Form::label('userEmail', 'Email address*') !!}
                </p>
                <p>
                    {!! Form::text('userEmail', old('userEmail')) !!}
                </p>

                <p>
                    {!! Form::label('userSite', 'Website') !!}
                </p>
                <p>
                    {!! Form::text('userSite', old('userSite')) !!}
                </p>

                <p>
                    {!! Form::label('', 'Type of Assistant:') !!}
                </p>
                    <div class="container">
                        <div class="row">

                            @foreach($types as $k=>$type)

                                @if($k%3==0)
                                    <div class="col-md-4">
                                @endif
                                        <p>{!! Form::checkbox('c'.($k+1), $type->title, null, ['class'=>'col-1']) !!}{!! Form::label('c'.($k+1), $type->title, ['class'=>'col-11']) !!}</p>
                                @if(($k+1)%3==0)
                                    </div>
                                @endif

                            @endforeach

                        </div>
                    </div>

                    <p>
                        {!! Form::label('userPrice', 'Price plan') !!}
                    </p>
                    <p>
                        {!! Form::text('userPrices', $order, ['disabled'=>'disabled']) !!}
                        {!! Form::hidden('userPrice', $order) !!}
                    </p>

                    <p>
                        {!! Form::label('userLanguage', 'Language of Assistant') !!}
                    </p>
                    <p>
                        {!! Form::text('userLanguage', old('userLanguage')) !!}
                    </p>

                    <p>
                        {!! Form::label('userCore', 'Core responsibilites\task') !!}
                    </p>
                    <p>
                        {!! Form::text('userCore', old('userCore')) !!}
                    </p>

                    <p>
                        {!! Form::label('userMessage', 'Message') !!}
                    </p>
                    <p>
                        {!! Form::textarea('userMessage', old('userMessage')) !!}
                    </p>
                {!! Form::submit('Send', ['class'=>'col-sm-6 btn-red']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    @show

    @section('contacts')
        @include('layouts.contacts')
    @show

@endsection