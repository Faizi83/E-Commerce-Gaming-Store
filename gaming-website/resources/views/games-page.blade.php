@extends('headerfooter')

@section('title','product-page')

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
    height: 100vh;
  }
</style>
</head>


<body>





    
<!-- Product Page -->

  
<section class="product-page">
  <div class="container my-5 pt-5 product_data">
    @if(isset($games))
  <div class="row mt-5">
    <div class="col-lg-5 col-md-12 col-12">
      <div class="img-box">
        <img src="{{ asset('storage/' . str_replace('public/', '', $games->product_image)) }}" class="img-fluid w-100 game_image" alt="">
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12 product-content pt-2">
      <h6 class="game_name">{{$games->product_name}}</h6>
      <div class="stars">
  
       @for ($i=1; $i<=5; $i++)
       @if ($i <= $games->product_rating)
        <i style="font-size: 24px"  class="fa-solid fa-star"></i>
       
       @else
        <i style="font-size: 24px" class="fa-regular fa-star"></i>
       
       @endif
     
       
         
       @endfor
   

      </div>
      <h2 class="game_price">${{$games->product_price}}</h2>
      <input type="hidden" class="game_id" value="{{$games->id}}">
      <input type="number" class="game_qty" value="1" min="1" max="5">
      {{-- <button class="buy-btn">Add To cart</button> --}}
      <button class="buy-btn">Add To Cart</button>




    
  
      <h4 class="mt-4 mb-1">Game details</h4>
      <span class="game_desc">{{$games->product_desc}}

    </div>
  </div>
  @endif

</div>


</section>















   






</body>
