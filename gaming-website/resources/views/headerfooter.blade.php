
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top pt-3">
    <div class="container">
      <a class="navbar-brand" href="#">GAME<span>ON</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars-staggered"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page"href="{{url('/games')}}">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/more')}}">More</a>
          </li>
          <li class="nav-item">
           <a href="{{url('/cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
           <span class="numbers cart-count">0</span>
          </li>
    
          <li class="nav-item">
           <a href="{{url('/favourite')}}"><i class="fa-solid fa-heart"></i></a>
           <span  class="numbers fvrt-count">0</span>
          </li>
         
      </div>
    </div>
  </nav>












 @yield('main-area')















    <!-- Footer -->
    <footer class="text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left">
        <div class="col-lg-3 col-md-6 col-sm-12  mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">GAME<span>ON</span></h5>
          <p>Gameon Present high opprtunity to gamers for buying and get their games at discounted price also licensed from developers companies as well.Lets start your journey with beast gaming titles!</p>  
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Top Titles </h5>
          <hr>
        
          <p> 
            <a class="text-white text-decoration-none" href="/games-page/92">Farcry 6</a>
          </p>
          <p>
            <a class="text-white text-decoration-none" href="/games-page/93">WWE 2k23</a>
          </p>
          <p>
            <a class="text-white text-decoration-none" href="/games-page/109">Fifa 2023</a>
          </p>
          <p>
            <a class="text-white text-decoration-none" href="/games-page/91">Tekken 7</a>
          </p>

        </div>
       
        <div class="col-lg-3 col-md-6 col-sm-12  mx-auto mt-3">

          <h5 class="text-uppercase mb-4 font-weight-bold">Sponsers</h5>
          <hr>
         
          
          <p>
            <a class="text-white text-decoration-none" href="https://www.rockstargames.com/">Rockstar Games</a>
          </p>
          <p>
            <a class="text-white text-decoration-none" href="https://www.ubisoft.com/en-us/games">Ubisoft Games</a>
          </p>
          <p>
            <a class="text-white text-decoration-none" href="https://www.ea.com/">Electronic Arts</a>
          </p>
          <p>
            <a class="text-white text-decoration-none" href="https://www.activision.com/games">Activsions</a>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12  mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
          <hr>
   
          <p>
            <i class="fas fa-home mr-3"></i> www.gameon.com
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> gameon@gmail.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i> +923222412321
          </p>
          <p>
            <i class="fas fa-print mr-3"></i> @Gameonoffical
          </p>

        </div>
      </div>

     

    </div>

   </footer>
<!-- Jquery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<!-- Bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script defer src="{{ asset('script/script.js')}}"></script>



</html>






