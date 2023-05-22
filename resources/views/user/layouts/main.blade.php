<?php

use App\Models\Category;
$categories = Category::all();
use Illuminate\Support\Facades\Auth;
?>

<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hami Chau</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- master CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/master.css')}}">
    <!-- modernizr js -->
    <script src="{{asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>

<body>

    <!-- header-area start -->
    <header class="header-area">
        <div class="header-top hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="top-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="top-srch-bx">
                            <input type="text" placeholder="Text Search">
                            <div class="button_search">
                                <button title="Search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>

                        

                        <div class="account-login">
                            @if(auth()->user())
                                <?php 
                                    $name = Auth::user()->name; 
                                ?>
                                
                                <div class="accounts-login dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{$name}} 
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="/userDashboard" target="_blank">
                                            <span>
                                                Dashboard
                                            </span>
                                        </a> <br>

                                        <a href="/login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span>
                                                Logout
                                            </span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form> 
                                       
                                                        
                                    </div>
                                </div>

                            @else
                          
                            <div class="accounts-login">
                                <a href="/login"><span>Login</span></a>
                            </div>
                            <div class="accounts-login">
                                <a href="/register"><span>Register</span></a>
                            </div>
                            @endif
                        </div>


                        <div class="contacts-top">
                            <div class="contacts-supports">
                                <span class="spprt-phone">
                                    <i class="fa fa-phone"></i>
                                    9811070080
                                </span>
                                <span class="support-email">
                                    <i class="fa fa-envelope"></i>
                                    hamichau658@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="header-bottom" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo.png" alt="">Ḩamiℭhau</a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="/cause">Causes</a></li>
                                    <li><a href="/shopping">Shop</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li class="parent">
                                        <a href="#">Category</a>

                                        <div class="mega-menu">
                                            @foreach($categories as $category)
                                            <span>
                                                <a class="mm-title" href="/category/{{$category->id}}">{{$category->category_name}}</a>
                                            </span>
                                            @endforeach

                                        </div>


                                    </li>
                                    <li class="blink"><span >Donate Today!</span></a></li>
                         
                                   
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Default</a></li>
                                        <li><a href="index-2.html">Home Blue</a></li>
                                        <li><a href="index-3.html">Home Turquoise</a></li>
                                    </ul>
                                </li>
                                <li><a href="causes.html">Causes</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="#">page set 1</a>
                                            <ul>
                                                <li><a href="shopping-cart.html">Cart</a></li>
                                                <li><a href="shop-leftsidebar.html">Shop left sidebar</a></li>
                                                <li><a href="shop-rightsidebar.html">Shop right sidebar</a></li>
                                                <li><a href="shop-list.html">Shop list</a></li>
                                                <li><a href="shop-fullwidth.html">Shop fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">page set 2</a>
                                            <ul>
                                                <li><a href="blog-details.html">Blog details</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="contact-us.html">Contact us</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">page set 3</a>
                                            <ul>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="single-product.html">Single product</a></li>
                                                <li><a href="team-member.html">Team member</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->

    @yield('content')
    <!-- footer-area start -->
    <footer class="footer-area" style="min-height: 100vh;">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="copyryt-txt">
                            Copyright ©
                            <a href="http://bootexperts.com/">BootExperts.com</a> . All Rights Reserved
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Be a Volunteer</a></li>
                                    <li><a href="#">What we do</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{asset('user/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('user/js/wow.min.js')}}"></script>
    <!-- venobox js -->
    <script src="{{asset('user/js/venobox.min.js')}}"></script>
    <!-- mixitup js -->
    <script src="{{asset('user/js/jquery.mixitup.js')}}"></script>
    <!-- elevateZoom js -->
    <script src="{{asset('user/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <!-- nivo-slider js -->
    <script src="{{asset('user/lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('user/lib/home.js')}}" type="text/javascript"></script>
    <!-- meanmenu js -->
    <script src="{{asset('user/js/jquery.meanmenu.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('user/js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

<!-- Mirrored from tvlgiao.github.io/html-charity-demo/charity/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 11:35:43 GMT -->

</html>