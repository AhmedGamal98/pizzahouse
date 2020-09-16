@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">Base - {{$pizza->base}}</p>
    <p class="topoings">Extra toppings: </p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach    
    </ul>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method ="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
    <a href="/pizzas" class="back"><-Back to Pizzas list</a>
</div>
@endsection