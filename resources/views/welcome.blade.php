@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
   
    <div class="content">
        <img src="/img/pizza.png" alt="pizza logo">
        <div class="title m-b-md">
             Pizza HOUSE
        </div>
           <p class="mssg">{{ session('mssg') }}</p>
          <input type="button" onclick="location.href='/pizzas/create';" value="Go to Create" >
    </div>

</div>
@endsection