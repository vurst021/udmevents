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
    <link rel="icon" href="{{URL::asset('img/core-img/udm-logo-final.png')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/core-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between 
@if(Request::url() != URL::to('/'))
anti-transparent-nav
@endif
        ">
            <!-- Classy Menu -->
            <nav class="classy-navbar col-md-4 col-sm-12" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{ route('index') }}">UDM PLANNER</a>
                <!-- Navbar Toggler -->
                
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
            <div class="container col-sm-12 col-lg-5 offset-lg-1">
                <div class="navbarRight row col-12 col-xs-12">
                    <div class="group-area col-sm-3 col-xs-3">
                        <a href="{{ route('events')}}">Events</a>
                    </div>
                    <!-- Cart Area -->
                    <div class="cart-area col-sm-3 col-xs-3">
                        <a href="{{ route('organization')}}" >Org</a>
                    </div>
                    @if(Auth::user()->user_type == "g")
                    <div class="group-area col-sm-3 col-xs-3">
                        <a href="{{ route('event.create')}}">Request&nbsp;&nbsp;Event</a>
                    </div>
                    @endif
                    @if(Auth::user()->user_type == "a")
                        <div class="user-login-info col-sm-3 col-xs-3">
                            <a href="{{ route('event.requests') }}">Requests{{-- <span>3</span> --}}</a>
                        </div>
                    @endif
                    <div class="user-login-info col-sm-3 col-xs-3">
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
