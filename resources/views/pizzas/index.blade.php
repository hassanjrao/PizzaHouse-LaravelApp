@extends('layouts.app')

@section('content')


<div class="wrapper pizza-index">

    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)

        <div class="pizza-item">
            <img src="/img/pizza.png" alt="Pizza Image">
        <h4><a href="{{route("pizzas.show","$pizza->id")}}"> {{ $pizza->name }} </a></h4>
        </div>

    @endforeach

</div>





@endsection

{{-- <p>{{ $type }} - {{ $crust }} - {{ $price }}</p>

@if($price>15)
    <p>This pizza is expensive</p>
@elseif($price < 5)
    <p> This pizza is cheap</p>
@else
    <p>this pizza is normally priced</p>
@endif

@php
    $name="hassan";
    echo($name);
@endphp--}}

{{-- @for($i=0; $i<count($pizzas); $i++)

                <p>{{ $pizzas[$i]['type'] }}</p>

@endfor--}}
{{-- 
            <p>{{ $name }}</p>
<p>{{ $age }}</p> --}}



{{-- <p> {{$loop->index }} {{ $pizza['type'] }} --
{{ $pizza["base"] }}

@if($loop->first)
    <span> first one</span>
@endif

@if($loop->last)
    <span>Last one</span>
@endif

</p> --}}
