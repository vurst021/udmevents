<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>UDM Event Planner</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/udm-logo-final.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar col-4" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{ route('index') }}">UDM PLANNER</a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="megamenu-item"><a href="{{ route('home') }}">Shop</a>
                                    <div class="megamenu menu-on">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Women's Collection</li>
                                            <li><a href="shop.html">Dresses</a></li>
                                            <li><a href="shop.html">Tops &amp; Shirts</a></li>
                                            <li><a href="shop.html">Shorts</a></li>
                                            <li><a href="shop.html">Pants</a></li>
                                        </ul>
                                       
                                        <div class="single-mega cn-col-4">
                                            <img src="http://localhost:8080/preppylane1/public/img/bg-img/bg-6.jpg" alt="">
                                        </div>
                                    </div>
                                <span class="dd-trigger"></span><span class="dd-arrow"></span></li>
                                
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                </div>
            </nav>                <!-- Group Area -->
                        @guest
                <div class="container col-4 offset-md-4 ">
                    <div class="navbarRight row">
                        <!-- User Login Info -->
                        <div class="user-login-info">
                            <a href="{{ route('login') }}">Log In</a>
                        </div>
                       
                        <div class="user-login-info">
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>
                    </div>
                </div>


                        @else
                <div class="container col-6 offset-md-2 ">
                    <div class="navbarRight row">
                        <div class="group-area">
                            <a href="{{ route('events')}}">Browse</a>
                        </div>
                        <!-- Cart Area -->
                        <div class="cart-area">
                            <a href="" id="essenceCartBtn">Groups<span>3</span></a>
                        </div>
                        <div class="user-login-info">
                            <a href="#">Hi {{ ucwords(Auth::user()->fname) }} !</a>
                        </div>
                        <div class="user-login-info">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form).submit();">{{ __('Logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                        @endguest

            

            
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart">Events<span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->