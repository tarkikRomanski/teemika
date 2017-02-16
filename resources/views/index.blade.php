<!doctype html>
<html lang="en">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KM2FH7');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <!--meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"-->
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teemika</title>
    {!! Html::favicon('/img/favicon.png') !!}
    {!! Html::style('/styles/bootstrap-grid.min.css') !!}
    {!! Html::style('/styles/style.css') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.1.1.min.js', ['integrity'=>'sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=', 'crossorigin'=>'anonymous']) !!}
    {!! Html::script('/js/main.js') !!}
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KM2FH7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container-fluid">
    <div class="row" id="top">

        @if(session('status'))
            <div class="allert allert-access">
                {{ session('status') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="allert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="allert-error allert">

            </div>

        @yield('content')

        @include('layouts.footer')
    </div>
</div>
</body>
</html>