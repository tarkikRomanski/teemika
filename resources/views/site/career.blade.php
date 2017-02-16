@extends('index')

@section('content')

    @section('header')
        @include('layouts.headerB')
    @show

    <div class="col-sm-12" id="wrap-career-top"></div>

    <div class="container">
        <div class="row">
            <section class="col-sm-12" id="wrap-career">
                <h2><div class="oq"></div>Career<div class="cq"></div></h2>

                <p class="center">Teemika is always on the lookout for dynamic young professionals interested in starting a career in international sales and marketing. Up for new challenges and the opportunity to work closely with C-level executives from European and American companies? If you answered yes, send us a message at <strong>job@teemika.com</strong> and let’s get started.</p>
                <div class="container-fluid" id="career-table">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><strong>What We Offer:</strong></h3>
                            <p>A friendly work environment in a modern office space</p>
                            <p>The opportunity to develop your background in sales, marketing, and customer support</p>
                            <p>Possibility to practice your English skills on a daily basis</p>
                            <p>Corporate events and group outings</p>
                        </div>
                        <div class="col-sm-6">
                            <h3><strong>What You Should Have:</strong></h3>
                            <p>A University Education</p>
                            <p>An interest in sales, marketing, or international business</p>
                            <p>Upper-intermediate or fluent English</p>
                            <p>A right attitude</p>
                        </div>
                    </div>
                </div>
                <p class="center">Life at Mindy isn’t all about work. We know how to kick back and relax at corporate events and monthly group outings. Interested in learning more? Send us a message at <strong>job@teemika.com</strong></p>
            </section>
        </div>
    </div>

    @section('contacts')
        @include('layouts.contacts')
    @show

@endsection