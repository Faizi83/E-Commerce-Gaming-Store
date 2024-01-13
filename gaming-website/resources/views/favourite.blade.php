@extends('headerfooter')

@section('title','favourite')

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
    background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(/images/bg\ image.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    height: 100vh;
  }
</style>
</head>


<body>



  <!-- Favourite Games Section -->
    
<section class="fav-games">
        <h2 class="text-center">Favourite Games</h2>
        <div class="container mt-5">
          <div class="row g-5">
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 col-6">
              <div class="card product-card">
                <img src="/images/doom.jpeg" class="card-img-top product-image img-fluid" alt="Game Title">
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">Doom 3</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>$70</del></p>
                      <p class="px-1">$50</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
    
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
    
                </div>
              </div>
            </div>

    
    
      </section>


      @endsection

</body>





