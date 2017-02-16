<section class="col-sm-12" id="wrap-how">
    <div class="container">
        <h2 class="inverse"><span class="oq"></span>How<span class="cq"></span></h2>
        <div class="row">

            @foreach($how as $k=>$item)
                @if($k == 0 || $k == 3)
                    <div class="col-lg-6">
                @endif
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-3 col-12" style="text-align: center">
                                    <img src="./img/h{{$k+1}}.png" alt="">
                                </div>
                                <div class="col-2 col-sm-1">{{$k+1}}</div>
                                <div class="col-10 col-sm-8">
                                    <p>
                                        {{ $item->text }}
                                    </p>
                                </div>
                            </div>
                        </div>
                @if($k == 2 || $k == 5)
                    </div>
                @endif

            @endforeach

        </div>
    </div>
</section>