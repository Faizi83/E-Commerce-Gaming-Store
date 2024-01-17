@extends('headerfooter')

@section('title','favourite')

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
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(/images/bg\ image.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
 
   
  }



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

  .fav-para{
    display: flex;
    justify-content: center;
    padding-top:10rem;
    width:100%;

    min-height:70% ;



  }
.fav-para h3{


  font-size: 2rem;
  
  color: rgba(0, 119, 255, 0.822);


  
}


  </style>

</head>


<body>



  <!-- Favourite Games Section -->


<section class="fav-games">
  @if(count($fav_data) > 0)
        <h2 class="text-center">Favourite Games</h2>
        <div class="container mt-5">
          <div class="row g-5">
           
            @foreach ($fav_data as $data )
              
        
            <div class="col-md-4 col-lg-3 col-6 fvrt-box" data-item-id="{{ $data->fav_id }}">
              <div class="card product-card">
                {{-- <img src="{{$data->fav_image}}" class="card-img-top product-image img-fluid fav-image"> --}}
                <a href="{{ url('games-page/' . $data->fav_id) }}"><img src="{{$data->fav_image}}" class="card-img-top product-image img-fluid fav-image" alt="Game Title"></a>
                <div class="card-body product-details">
                  <div class="content d-flex justify-content-between">
    
                    <h2 class="card-title product-title">{{$data->fav_name}}</h2>
                    <div class="price d-flex justify-content-between">
                      <p><del>${{$data->fav_del_price}}</del></p>
                      <p class="px-1">${{$data->fav_price}}</p>
                    </div>
                  </div>
                  <div class="content d-flex justify-content-between">
    
                    <div class="stars d-flex justify-content-between ">
                      @for ($i = 1; $i <= 5; $i++)
                          @if ($i <= $data->fav_rating)
                              <i class="fa-solid fa-star"></i>
                          @else
                              <i class="fa-regular fa-star"></i>
                          @endif
                      @endfor
                  </div>
    
                    <i class="fa-solid fa-times remove-fvrt"></i>

                  </div>
    
    
                </div>
              </div>
            </div>
            @endforeach
            @else
            <div class="fav-para">

              <h3>You don't have Favourite Items</h3>
            </div>
            @endif
       
 


          

    
    
      </section>

      @endsection


</body>





