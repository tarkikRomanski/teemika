<section class="col-sm-12" id="wrap-services">
    <div class="container">
        <div class="row">
            <h2><span class="oq"> </span>Services<span class="cq"></span></h2>

            <div class="col-sm-12" id="services">
                <div class="container-fluid">
                    <div class="row">

                        @foreach($services as $service)
                            <div class="col-lg-4">
                                <article class="service-item">
                                    <h3>{!! $service->title !!}</h3>
                                    <p>{{ $service->descr }}</p>
                                    {!! Html::link($service->aliece, 'See more') !!}
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
                <span id="slide-about"></span>
            </div>
        </div>
    </div>
</section>