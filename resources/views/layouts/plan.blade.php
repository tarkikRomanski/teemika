<section class="col-sm-12" id="wrap-plans">
    <div class="container">
        <h2><span class="oq"></span>Our plans<span class="cq"></span></h2>

        <div class="col-sm-12" id="plans">
            <div class="container-fluid">
                <div class="row">

                    @foreach($plans as $plan)
                        <div class="col-lg-4">
                            <article class="plans-item">
                                <h3>{{ $plan->title }}</h3>
                                <p class="price"><span>{{ $plan->price }}</span>$</p>
                                <p class="descr">{{ $plan->text }}</p>
                                {!! Html::link('/order/'.str_replace(' ', '%20', $plan->title), 'Order services') !!}
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>