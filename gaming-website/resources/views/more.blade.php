@extends('headerfooter')

@section('title','more')

@section('main-area')






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
      background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(/images/bg\ image.jpg);
      background-position: center;
      background-size: cover;
      position: relative;
    }
  </style>
</head>


<body>




<section class="more pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 carousel-container">
           
        <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

        
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/images/more-image-1.jpg" alt="Los Angeles" class="d-block w-100">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                  <div class="link">
              
                    <a href="https://www.ubisoft.com/en-us/game/assassins-creed" class="btn btn-danger">Watch Now</a>
                  </div>
                  

                 
                </div>
              </div>
              <div class="carousel-item">
                <img src="/images/more-image2.jpeg" alt="Chicago" class="d-block w-100">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                  <div class="link">
              
                    <a href="https://www.ubisoft.com/en-us/game/assassins-creed" class="btn btn-danger">Watch Now</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/images/more-image3jpeg.jpeg" alt="New York" class="d-block w-100">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                  <div class="link">
                   
                    <a href="https://www.ubisoft.com/en-us/game/assassins-creed" class="btn btn-danger">Watch Now</a>
                  </div>
                </div>
              </div>
            </div>
            
            
        
          
          </div>
          
        
                    </div>
    </div>
  </div>

</section>

<!-- Trending-cards -->
<section class="more-cards pb-5">
  <div class="container pt-5">
    <div class="row g-5">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <a href="https://www.fortnite.com/" class="text-decoration-none">
          <img src="/images/more-cards1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Fortnite's unique blend of shooting mechanics, building structures on-the-fly, and constantly.</p>
          </div>
          </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <a href="https://overwatch.blizzard.com/en-us/" class="text-decoration-none">
          <img src="/images/more-cards2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Overwatch's new season define is its diverse roster of characters,with their own distinct.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <a href="https://avengers.crystald.com/" class="text-decoration-none">
          <img src="/images/more-cards3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Marvel's Avengers" is an action-adventure game that brings together iconic Marvel superheroes.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <a href="https://forza.net/horizon/" class="text-decoration-none">
          <img src="/images/more-cards4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Forza Horizon games typically and landscapes while participating in a variety of racing event.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <a href="https://www.counter-strike.net/cs2" class="text-decoration-none">
          <img src="/images/more-cards5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Counter-Strike 2 received generally favorable reviews from critics. In contrast, players game.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <a href="https://www.rockstargames.com/gta-online" class="text-decoration-none">
          <img src="/images/more-cards6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Grand Theft Auto V Online is the multiplayer component of the critically game actions.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <a href="https://www.ea.com/compete/fifa-online/events/eacc-autumn-2020" class="text-decoration-none">
          <img src="/images/more-cards7.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Immerse yourself in the thrilling world of football with FIFA Online on PC, where enjoy.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <a href="https://pubg.com/en-na" class="text-decoration-none">
          <img src="/images/more-cards8.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">"Dive into the heart-pounding battlegrounds with PUBG, a pioneer in the battle royale genre.</p>
          </div>
        </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <a href="https://www.callofduty.com/" class="text-decoration-none">
          <img src="/images/more-cards9.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">"Engage in adrenaline-pumping warfare with Call of Duty Online on PC, where the enjoyed.</p>
          </div>
            </a>
        </div>

      </div>
    </div>
  </div>

</section>












@endsection


</body>


