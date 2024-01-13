@extends('headerfooter')

@section('title','games')

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
</head>

<style>
  body{
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(/images/bg\ image.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
  }

  .error{
    width: 100%;
    height:35vh;
    
  }

  .error p{

    font-size:2.3rem;
    font-weight:400;
     color:rgba(0, 90, 194, 0.5);
     background-color:rgb(0, 0, 0);  
    
     
     
  }

  


</style>

<body>


<!-- search box -->
  <section class="search-box">
   <div class="container">
    <div class="row ">
        <div class="col-10 mx-auto">
            
                     <form action="{{ url('/games') }}" method="GET" class="d-flex justify-content-center">
                      @csrf
                      <input class="form-control me-2" type="search" name="search" placeholder="Search Your Title" aria-label="Search">
                      <select name="category">
                        <option value="">All Categories</option>
                        <option value="Racing">Racing</option>
                        <option value="Fighting">Fighting</option>
                        <option value="Horror">Horror</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Sports">Sports</option>
                        <option value="Shooting">Shooting</option>
                        <option value="Survival">Survival</option>
                        <option value="Multiplayer">Multiplayer</option>
                        <option value="Action">Action</option>
                      </select>
                      <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
            
        </div>
    </div>
   </div>
  </section>

  <!-- Games Section -->
  <section class="top-games mt-5">
    <div class="container mt-5">
      <div class="row g-5">
  
        {{-- For checking game searched or not --}}
        @if (count($products) > 0)
        @foreach ($products as $product)
    <div class="col-md-4 col-lg-3 col-6">
        <div class="card product-card">
          <a href="{{ url('games-page/' . $product->id) }}"><img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image)) }}" class="card-img-top product-image img-fluid" alt="Game Title"></a>

            <div class="card-body product-details">
                <div class="content d-flex justify-content-between">
                    <h2 class="card-title product-title">{{ $product->product_name }}</h2>
                    <div class="price d-flex justify-content-between"> 
                        <p><del>${{$product->product_del_price}}</del></p>
                        <p class="px-1">${{ $product->product_price }}</p>
                    </div>
                </div>
                <div class="content d-flex justify-content-between">
                    <div class="stars d-flex justify-content-between">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $product->product_rating)
                                <i class="fa-solid fa-star"></i>
                            @else
                                <i class="fa-regular fa-star"></i>
                            @endif
                        @endfor
                    </div>
                    <i class="fa-solid fa-heart favorite-icon" data-product-id="{{ $product->id }}"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach




@else
 {{-- For checking game not available --}}

@if ($query)
    <div class="col-12 error d-flex justify-content-center align-items-center" >
        <p>{{ $query }} Not Available!</p>
    </div>
                    

@else
 {{-- For default view --}}


@foreach ($allProducts as $product)
<div class="col-md-4 col-lg-3 col-6">
  <div class="card product-card">
    <a href="{{ url('games-page/' . $product->id) }}"><img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image)) }}" class="card-img-top product-image img-fluid" alt="Game Title"></a>

      <div class="card-body product-details">
          <div class="content d-flex justify-content-between">
              <h2 class="card-title product-title">{{ $product->product_name }}</h2>
              <div class="price d-flex justify-content-between"> 
                  <p><del>${{$product->product_del_price}}</del></p>
                  <p class="px-1">${{ $product->product_price }}</p>
              </div>
          </div>
          <div class="content d-flex justify-content-between">
              <div class="stars d-flex justify-content-between">
                  @for ($i = 1; $i <= 5; $i++)
                      @if ($i <= $product->product_rating)
                          <i class="fa-solid fa-star"></i>
                      @else
                          <i class="fa-regular fa-star"></i>
                      @endif
                  @endfor
              </div>
              <i class="fa-solid fa-heart favorite-icon" data-product-id="{{ $product->id }}"></i>
          </div>
      </div>
  </div>
</div>
@endforeach
@endif
@endif
  
      </div>  
    </div>






  </section>
  @endsection

 







</body>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function () {
        $('.favorite-icon').on('click', function () {
            var productId = $(this).data('product-id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/add-to-favorites/' + productId,
                type: 'POST',
                success: function (response) {
                    console.log(response.message);
                },
                error: function (error) {
                    console.log(error.responseJSON.message);
                }
            });
        });
    });
</script>

