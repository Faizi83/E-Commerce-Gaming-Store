@extends('headerfooter')
@section('title','cart')

@section('main-area')





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <!-- Font Awesome CDN link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <title>@yield('title')</title>

  
<style>
  body{
    background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(/images/bg\ image.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
  }

  
</style>
</head>


<body>


  <div class="container cart" >
    <h2 class="text-center">Cart Menu</h2>


    @foreach ($cart as $item)
        <div class="cart-item pt-5 mt-3" data-item-id="{{ $item->game_id }}">
            <div class="row">
                <div class="col-md-3">
                    <div class="cart-img">
                        <img src="{{ $item->game_image }}" alt="Product Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="pt-5">{{ $item->game_name }} </h5>
                </div>
                <div class="col-md-3 text-end">
                    <p>Price: ${{ $item->game_price }}</p>
                    <p>Quantity: {{ $item->game_qty }}</p>
                    <button class="btn btn-danger remove-item"> <i class="fas fa-trash"></i> Remove</button>
                </div>
            </div>
            {{-- @php
                $totalPrice += $item->game_price * $item->game_qty; // Update the total price
            @endphp --}}
        </div>
    @endforeach

    <div class="text-end mt-4 checkout">
      <h4 id="total-price"></h4>
        <button class="btn btn-success">Checkout</button>
    </div>
</div>

  @endsection


 




  
</body>



 

 





