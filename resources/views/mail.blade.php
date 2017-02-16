<h1>Order</h1>
<p>
    <p>Name: {{ $data['userName'] }}</p>
    <p>Email: {{ $data['userEmail'] }}</p>
    <p>Website: {{ $data['userSite'] }}</p>
    <p>Type of Assistant:
        <ul>
            @for($i=1; $i<=9; $i++)
                @if(isset($data['c'.$i]))
                    <li>{{ $data['c'.$i] }}</li>
                @endif
            @endfor
        </ul>
    </p>
    <p>Price plan: {{ $data['userPrice'] }}</p>
    <p>Language of Assistant: {{ $data['userLanguage'] }}</p>
    <p>Core responsibilites\task: {{ $data['userCore'] }}</p>
    <p>Message: {{ $data['userMessage'] }}</p>

</p>