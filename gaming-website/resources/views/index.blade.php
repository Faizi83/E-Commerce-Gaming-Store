@extends('headerfooter')

@section('title','home')

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
      .custom-swal-popup {
    width: 200px;
    border-radius: 29px;
    background-color: black;
    color: white;
    transition: opacity 0.5s ease; /* Smooth transition effect */
}

.custom-swal-title {
    font-size: 12px;
}


.fvrt-box .content .fa-times:hover{
    color: rgb(201, 0, 0);
    
  }


  .fav_data .content .favorite-icon:hover{
    color: rgb(201, 0, 0);
    
  }

  .fav_data .content .favourite-icon {
  color:  rgb(201, 0, 0);
}

  </style>
</head>
<body> 



  <section class="main">
      <!-- Banner -->
  <div class="banner">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="banner-title">
            <h1>Get Your <span>Titles</span></h1>
            <p>Lets begin a beautifully life where you meet strangers who become your friends.A Gold life for every
              gamer must be Exist.</p>
            <a href="{{url('/games')}}">Visit Store</a>

          </div>
        </div>

      </div>
    </div>
   

  </div>


  <!-- Top Games Section -->
  <div class="top-games mt-5">
    <h1 class="text-center">Top Titles</h1>
    


    <div class="container mt-5">
      <div class="row g-5">
          @foreach ($products as $product)
              @if(in_array($product->id, [90, 91, 92, 93, 94, 95, 96, 99]))
                  <div class="col-md-4 col-lg-3 col-6">
                      <div class="card product-card fav_data">
                          <a href="{{ url('games-page/' . $product->id) }}"><img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image)) }}" class="card-img-top product-image img-fluid fav-image" alt="Game Title"></a>
                          <input class="fav-id" type="hidden" value="{{ $product->id }}">
  
                          <div class="card-body product-details">
                              <div class="content d-flex justify-content-between">
                                  <h2 class="card-title product-title fav-name">{{ $product->product_name }}</h2>
                                  <div class="price d-flex justify-content-between">
                                      <p class="fav-del-price"><del>${{ $product->product_del_price }}</del></p>
                                      <p class="px-1 fav-price">${{ $product->product_price }}</p>
                                  </div>
                              </div>
                              <div class="content d-flex justify-content-between">
                                  <div class="stars d-flex justify-content-between" data-rating="{{ $product->product_rating }}">
                                      @for ($i = 1; $i <= 5; $i++)
                                          @if ($i <= $product->product_rating)
                                              <i class="fa-solid fa-star"></i>
                                          @else
                                              <i class="fa-regular fa-star"></i>
                                          @endif
                                      @endfor
                                  </div>
                                  <i class="fa-solid fa-heart favorite-icon"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              @endif
          @endforeach
      </div>
  </div>
  




      
    </div>






  </div>
  </section>
  



      <!-- Upcoming Games Section -->
  <section class="upcoming py-5">
    <h1 class="text-center">Upcoming</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12"><h2><strong>#1 GTA 6</strong>  release date has certainly been a long time coming. Early gameplay leaks of GTA 6 surfaced online last year, along with lines of source code and development footage for the open-world game. There’s been plenty of rumors and speculation surrounding the release date since then, but you can catch up with all the confirmed details surrounding the story and setting in the GTA 6 right here on PCGamesN. Here’s all the latest on GTA 6, including news, gameplay, and of course, the release date.</h2></div>
        <div class="col-md-6 col-sm-12 " ><img class="img-fluid" src="/images/gta 6.jpeg" alt=""></div>
      </div>
    </div>

  </section>

  
      <!-- Upcoming Games Section -->
  <section class="upcoming py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12"><img class="img-fluid" src="/images/fortnite.jpg" alt=""></div>
        <div class="col-md-6 col-sm-12"><h2> <strong>#2 Fortnite</strong> Chapter 5 Season 1 is now here. It's called Fortnite Underground, and it adds secret underground bases, a moving train, as well as a bunch of new weapons and items.

          With Fortnite's new season only having recently released, it'll be a while before we know more about the next season. Thankfully, the battle royale title always lists when the current season is going to end, so we do now know when to expect the new season, at least..</h2></div>
      </div>
    </div>

  </section>

   <!-- Upcoming Games Section -->
   <section class="upcoming py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12"><h2><strong>#3 Battlefield V</strong>  is set during World War II and features both a single-player campaign and a multiplayer mode. The game received attention for its detailed graphics, immersive gameplay, and a focus on lesser-known aspects of World War II. It includes various multiplayer modes, including the Grand Operations mode, which offers large-scale battles with changing objectives over several in-game days..</h2></div>
        <div class="col-md-6 col-sm-12"><img class="img-fluid" src="/images/bf5.jpeg" alt=""></div>
      </div>
    </div>

  </section>
  
      <!-- Upcoming Games Section -->
  <section class="upcoming py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12"><img class="img-fluid" src="/images/nfs.jpeg" alt=""></div>
        <div class="col-md-6 col-sm-12"><h2><strong>#4 Need for speed</strong>  is a popular racing video game series that has been around since the mid-1990s. Developed by various studios, the series has seen numerous releases with a focus on high-speed racing, NFS is a distributed file system protocol that allows a user on a client computer to access files over a network as if the files were on the local device..</h2></div>
      </div>
    </div>

  </section>

       
 
  
      <!-- Comapnies Section -->
  <section class="brands py-5">
  
    <div class="container">
      <div class="row d-flex justify-content-between brand-img">
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/rockstar-games.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/ubisoft.png"  >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/ea-sports.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/epic games.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/capcom.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/valve.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/konami.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/bandai.png"  >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/2kgames.jpeg" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/riot.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/sega.png" >
        <img class="img-fluid col-lg-2  col-md-4 col-6 align-self-center" src="/images/bethesda.png" >
    </div>
  </section>

  @endsection



</body>

