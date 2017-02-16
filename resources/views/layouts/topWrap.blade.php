<section class="col-sm-12" id="wrap1">
    <div class="container">
        <div class="row">
            <h1>{!! $title !!}</h1>
            <div class="col-md-3 offset-4-5 ">
                <a href="#wrap-plans" class="btn-red">See our plans</a>
            </div>
        </div>
    </div>
    <aside>
        <p><span>Teemika will</span> help you</p>
    </aside>
</section>

<div class="col-sm-12" id="wrap2">
    <div class="container">
        <div class="row">
            @foreach($help as $k=>$item)
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="./img/icon_{{$k+1}}.png" alt="">
                    <p>{!! $item->text !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
