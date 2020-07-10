@extends('layouts.app')

@section('content')


<div class="flex-center position-ref full-height">


    <div class="content">
        <img src="/img/pizza-house.png" alt="pizaa house logo">
        <div class="title m-b-md">
            Multan's Best Pizza House
        </div>
        <p class="mssg">{{ session("mssg") }}</p>
        <a href="{{route("pizzas.create")}}">Order a Pizza</a>
    </div>


</div>

@endsection
