<header class="col-sm-12" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="logo">
                <div id="logo-img">{!! Html::link(App::make('url')->to('/').'#top', '') !!}</div>
            </div>
            <div class="nav2">
                <div class="nav-button"></div>
            </div>
            <div class="col-sm-9 nav1">
                <nav>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#top', 'Home') !!}</div>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#wrap-services', 'Services') !!}</div>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#wrap-aboutus', 'About') !!}
                        <!--div class="submenu">
                            <div class="submenu-item"><a href="#">Why</a></div>
                            <div class="submenu-item"><a href="#">How</a></div>
                        </div-->
                    </div>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#wrap-why', 'Why') !!}</div>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#wrap-how', 'How') !!}</div>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#wrap-plans', 'Plan') !!}</div>
                    <div class="menu-item">{!! Html::link(App::make('url')->to('/').'#wrap-contacts', 'Contact') !!}</div>
                </nav>
            </div>
        </div>
    </div>
</header>