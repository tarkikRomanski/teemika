<section class="col-sm-12" id="wrap-contacts">
    <div class="container">
        <h2><span class="oq"></span>Contact<span class="cq"></span></h2>
        <div class="container-fluid" id="contacts">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact">
                        <strong>Address:</strong>
                        @foreach($address as $item)
                            <address>{{ $item->title }}</address>
                        @endforeach
                    </div>
                    <div class="contact">
                        <strong>Phone:</strong>
                        @foreach($phones as $item)
                            @if($item->number != '' && $item->number != ' ' && $item->number != null)
                                <p>{{ $item->title }}: <a href="tel:{{str_replace(" ","",$item->number)}}">{{ $item->number }}</a></p>
                            @endif
                        @endforeach
                    </div>
                    <div class="contact">
                        <strong>Email:</strong>
                        @foreach($email as $item)
                            <p><a href="mailto:{{$item->title}}">{{$item->title}}</a></p>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-7 offset-md-1">
                    {!! Form::open(['route'=>'index', 'method'=>'post', 'id'=>'contact-form']) !!}
                        <p>
                            {!! Form::label('userName', 'Your name*') !!}
                        </p>
                        <p>
                            {!! Form::text('userName', old('userName')) !!}
                        </p>

                        <p>
                            {!! Form::label('userEmail', 'Email address*') !!}
                        </p>
                        <p>
                            {!! Form::email('userEmail', old('userEmail')) !!}
                        </p>

                        <p>
                            {!! Form::label('userSite', 'Website') !!}
                        </p>
                        <p>
                            {!! Form::text('userSite', old('userSite')) !!}
                        </p>

                        <p>
                            {!! Form::label('userText', 'Message') !!}
                        </p>
                        <p>
                            {!! Form::textarea('userText', old('userText'), ['rows'=>'15']) !!}
                        </p>

                        {!! Form::submit('Send', ['class'=>'col-sm-6 btn-red']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>