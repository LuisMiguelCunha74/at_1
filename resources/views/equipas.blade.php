@if(isset($equipas))
<h1>lista de equipas</h1>
@foreach($equipa as $equipas)
    <h2>{{$equipas}}</h2>
@endforeach
<p>esta tudo!</p>
@else
    {{$equipa}}
@endif