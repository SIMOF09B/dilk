<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Food</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- fancy box  -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">

                            <img src="{{ asset('img/logoweb.png') }}" width="140" height="90" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a data-bs-toggle="modal" data-bs-target="#search"><i class="fa fa-search"></i></a></li>                         
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{route('home')}}">Restaurants</a></li>
                                @auth
                                <li><a href="{{route('authc.order')}}">Orders</a></li>
                                @endauth
                                <li><a data-bs-toggle="modal" data-bs-target="#cartmodal">Cart  (<i class="fas fa-shopping-basket"></i><span class="text-danger">+{{isset($data)?$card->getDetails()->get('items')->count():0}})</span></a></li>
                            
                                @auth
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
        
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('authc.show') }}">
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @else
                                <li>
                                <a class="header-btn text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li>
                                <a class="header-btn text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    


                                <!-- Modal -->
  <div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <form action="">
            <div class="input-group mb-3">
              <input type="search" class="form-control" placeholder="type your address..." aria-label="search" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="submit" id="button-addon2">ok</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> 
  
  <!-- Modal -->
  <div class="modal fade" id="cartmodal" tabindex="-1" aria-labelledby="cartmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartmodalLabel">Cart</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if($card->getDetails()->get('items')->count() > 0 && isset($data))
            <table class="table table-striped table-dark text-light">
            @foreach($card->getDetails()->get('items') as $cart)
            <tr> 
                <td><span class="badge bg-secondary">{{$cart->get('quantity')}} x  </span> {{$cart->get('title')}} </td> 
                <td class=" text-center"><a class="btn btn-success">-</a></td>
            </tr>
            @endforeach
            </table>
            <hr>
             <p>Total :  MAD. {{$card->getItemsSubtotal()}} </p>
            <a class="btn btn-success" href="{{route('c_insert',['id'=>$data->id])}}">Order</a>
            <a class="btn btn-dark" href="{{route('deleteCard')}}">Cancel</a>
            @else
            <p>choose restaurant and items to order</p>
            @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  @include('visitors.client.edit')
    <!-- header ends  -->
    <div id="viewport">
        <div id="js-scroll-content">
            @yield('content')

            
    <footer class="page-footer bg-image" style="background-image: url(img/world_pattern.svg);">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-3 py-3">
              <h3>Fast Food</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure.</p>


            </div>
            <div class="col-lg-3 py-3">
              <h5>Company</h5>
              <ul class="footer-menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Help & Support</a></li>
              </ul>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Contact Us</h5>
              <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
              <a href="#" class="footer-link">+212 06</a>
              <a href="#" class="footer-link">fast@food.com</a>
            </div>
            <div class="col-lg-3 py-3">
              <h5>Contact Us</h5>
              <p>Get updates, news or events on your mail.</p>
              <div class="social-media-button">
                <a href="#"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
                <a href="#"><span class="mai-logo-youtube"></span></a>
              </div>
            </div>
          </div>


        </div>
      </footer>
        </div>
        
    </div>


    <!-- jquery  -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    <!-- fontawesome  -->
    <script src="{{ asset('assets/js/font-awesome.min.js') }}"></script>

    <!-- swiper slider  -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- mixitup -- filter  -->
    <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>

    <!-- fancy box  -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <!-- parallax  -->
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

    <!-- gsap  -->
    <script src=" {{ asset('assets/js/gsap.min.js') }}"></script>

    <!-- scroll trigger  -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- scroll to plugin  -->
    <script src=" {{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
    <!-- custom js  -->
    <script src=" {{ asset('js/main.js') }} "></script>

</body>

</html>
  