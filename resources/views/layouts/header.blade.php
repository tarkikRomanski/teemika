<nav class="menu" id="mob-menu">
    <div class="menu-item"><a href="#top">Home</a></div>
    <div class="menu-item"><a href="#wrap-services">Services</a></div>
    <div class="menu-item"><a href="#wrap-aboutus">About</a></div>
    <div class="menu-item"><a href="#wrap-why">Why</a></div>
    <div class="menu-item"><a href="#wrap-how">How</a></div>
    <div class="menu-item"><a href="#wrap-plans">Plan</a></div>
    <div class="menu-item"><a href="#wrap-contacts">Contact</a></div>
</nav>

<header class="col-sm-12" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="logo">
                <div class="menu" id="logo-img">{!! Html::link('#top', '') !!}</div>
            </div>
            <div class="nav2">
                <div class="nav-button">
                    @include('icon.menu')
                </div>
            </div>



            <div class="col-sm-9 nav1">
                <nav class="menu">
                    <div class="menu-item"><a href="#top">Home</a></div>
                    <div class="menu-item"><a href="#wrap-services">Services</a></div>
                    <div class="menu-item"><a href="#wrap-aboutus">About</a>
                        <!--div class="submenu">
                            <div class="submenu-item"><a href="#">Why</a></div>
                            <div class="submenu-item"><a href="#">How</a></div>
                        </div-->
                    </div>
                    <div class="menu-item"><a href="#wrap-why">Why</a></div>
                    <div class="menu-item"><a href="#wrap-how">How</a></div>
                    <div class="menu-item"><a href="#wrap-plans">Plan</a></div>
                    <div class="menu-item"><a href="#wrap-contacts">Contact</a></div>
                </nav>
            </div>
        </div>
    </div>
</header>