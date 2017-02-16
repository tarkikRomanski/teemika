<section class="col-sm-12" id="wrap-why">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 why-title">
                <p><span>Why you should</span> choose TEEMIKA?</p>
            </div>
            @foreach($why as $item)
                <div class="col-lg-4 why-item">
                    <div class="why-item-border{{$i++}}"></div>
                    <div class="why-item-border{{$i++}}"></div>
                    <img src="./img/w{{$j++}}.png" alt="" class="why-item-img">
                    <h4 class="why-item-title">{{$item->title}}</h4>
                    <p class="why-title-text"><span>{{$item->text}}</span></p>
                </div>
            @endforeach
        </div>
        <span id="slide-how"></span>
    </div>
</section>