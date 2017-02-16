<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminpanel</title>
    {!! Html::style('/styles/bootstrap.min.css') !!}
    {!! Html::script('/js/bootstrap.min.js') !!}

    <style>
        .pagination li{
            margin:20px 5px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 offset-4">
                {!! Html::image('/img/logo.png', '', ['style'=>'width:100%']) !!}
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav class="col-lg-2 navbar navbar-light bg-faded">
                <div class="navbar-nav">
                    {!! link_to_route('admin.message', 'See user messages') !!}
                    {!! link_to_route('admin.order', 'See user orders') !!}
                    <hr>
                    {!! link_to_route('admin.title', 'Edit title') !!}
                    <hr>
                    {!! link_to_route('admin.help', 'Edit “Teemika will help you”') !!}
                    <hr>
                    {!! link_to_route('admin.types', 'Edit Assistants types') !!}
                    <hr>
                    {!! link_to_route('admin.services', 'Edit services') !!}
                    <hr>
                    {!! link_to_route('admin.about', 'Edit information about us') !!}
                    <hr>
                    {!! link_to_route('admin.why', 'Edit "Why"') !!}
                    <hr>
                    {!! link_to_route('admin.how', 'Edit "How"') !!}
                    <hr>
                    <p>Plans</p>
                    {!! link_to_route('admin.plans.add', 'Add new plan') !!}
                    {!! link_to_route('admin.plans.edit', 'Edit plans') !!}
                    <hr>
                    <p>Pages</p>
                    {!! link_to_route('admin.pages.marketing', 'Marketing') !!}
                    {!! link_to_route('admin.pages.sales', 'Sales') !!}
                    {!! link_to_route('admin.pages.support', 'Support') !!}
                    <hr>
                    {!! link_to_route('admin.contact.edit', 'Edit contact') !!}
                    <hr>
                </div>
            </nav>
            <div class="col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>