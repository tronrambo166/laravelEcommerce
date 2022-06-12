

<!DOCTYPE HTML>
<head>
    <title>Store Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="={{ asset('/css/menu.css') }}" rel="stylesheet" type="text/css" media="all"/>
    
    
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        $(document).ready(function($){
            $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
        });
    </script>


   <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  
  
</head>
<body>
<div class="container">
    
    
    
    <div class="row py-3">
    
    <div class="col-sm-4">  <img style="width:170px" src="../images/logo.png" alt="" />
     <br /> <b>Tottenham's Online Store</b>       </div>

    
    
    <div class="col-sm-8 mt-3 ">
     <div class="row">
        <div class="col-sm-4"> 
        </div>

        @php use App\Models\Cart; $cart=Cart::get(); $carts=count($cart); @endphp
        @auth
        @php
        $user_id=Auth::user()->id; @endphp
          @endauth
        
        <div class="col-sm-4"> 
        
         <div class="cart w-100   bg-light ">  <span style="display: inline-block; margin-top: 8px; " class="ml-5  text-dark"><b>Cart</b> 
            <a style="width: 36px;height: 25px" href="{{route('cart')}}" class="btn ml-2 mb-1 btn-dark rounded font-weight-bold">
        <span style="margin-top: -5px; display: block" class="text-danger">{{$carts}}</span></a></span>
        
        </div>          
        
        </div>
        
        
        
        <div class="col-sm-4">
        
    @guest
    @if (Route::has('login'))

     <a class="w-100 my-0 h5 bg-light mt-2 d-inline-block text-center" href="{{ route('login') }}" >
        <b>Log In</b></a>
        @endif

     

     @else
     <a class="w-100 my-0 h5 text-info mt-2 d-inline-block text-center" href="{{url('profile/'.$user_id)}}">
        <b>Profile</b></a> 

        <div class="shadow border mt-3">
                <h4 class=" h6 text-success text-center">You are logged in!</h4>
        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                          <div class="text-center">  <x-dropdown-link :href="route('logout')" 
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link> </div>
                        </form>
                    </div>
        @endguest
        
        </div>
        
        
        
        
    </div>
    
    </div>
    </div> </div>
    


    <div class="row py-4">
        
            
            
            <div class="navbar navbar-expand-sm bg-dark p-0 w-100 navy text-center">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item py-1 px-3 bg-dark border-right "><a href="{{ url('home') }}" class="text-light nav-link">HOME</a></li>

                    <li class="nav-item py-1 px-3 bg-dark border-right"><a href="{{ route('products') }}" class="text-light nav-link">PRODUCTS</a></li>

                    <li class="nav-item py-1 px-3 bg-dark border-right"><a href="{{ route('brands') }}" class="text-light nav-link">TOP BRANDS</a></li>

                    <li class="nav-item py-1 px-3 bg-dark border-right"><a href="{{ route('cart') }}" class="text-light nav-link">CART</a></li>

                    <li class="nav-item py-1 px-3 bg-dark border-right"><a href="{{ route('savelist') }}"class="text-light nav-link">SAVED-LIST</a></li>

                    <li class="nav-item py-1 px-3 bg-dark border-right"><a href="{{ route('contact') }}" class="text-light nav-link">CONTACT</a></li>
                </ul>
            </div>
            
            
            
        </div>
        

    @yield('page')


<div class="container-fluid two bg-light mt-5 ">
        <div class="container">
            <div class="row py-5">
            
                <div class="col-sm-4">
                    <h4>Why Buy Us ?</h4>
                    <p class="text-secondary">lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product
                    lorem ipsum is the best product</p>
                </div>
                
                <div class="col-sm-4">
                    <h4>My Account</h4>
                    <a class="border-bottom border-secondary" href="pages/login.php">Sign In</a><br>
                    <a class="border-bottom border-secondary"href="pages/cart.php">View Cart</a><br>
                    <a class="border-bottom border-secondary"href="pages/contact.php">Help</a><br>
                    
                </div>
                
                
                
                
                <div class="col-sm-4">
                    <h4>Follow Us</h4>
                    <a class="border-bottom border-secondary"href=""><i class="mr-2 fa fa-twitter"></i> Twitter</a> <br>
                    <a class="border-bottom border-secondary"href=""><i class="mr-2 fa fa-facebook-square"></i> Facebook</a><br>
                    <a class="border-bottom border-secondary"href=""><i class="mr-2 fa fa-google-plus-square"></i> Google + </a><br>
                    
                </div>
                
                
            </div>
            
            
            
        </div>
        
        <footer>
            <div class="row fix bg-dark">
                <p class="m-auto font-italic text-secondary py-3">&copy; Copyright 2020. Tottenham All Rights Reserved</p>
            </div>
        </footer>
        
    </div>
    
    
    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="{{asset('assets/css/flexslider.css')}}" rel='stylesheet' type='text/css' />
<script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>



 <script src="{{ asset('/js/app.js') }}" defer></script>
</body>
</html>
