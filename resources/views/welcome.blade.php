<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/core-style.css')}}">
        <!-- JScripts -->
        <script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        
        <style type="text/css">
            
        </style>
    </head>
    <body>
        <!--Header Starts Here -->
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">UDM Planner</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item active ">
                <a class="nav-link border-left" href="#">Explore <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Notifications
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
            
          </div>
        </nav>
        <!--Header Ends Here-->

        <!-- ##### Breadcumb Area Start ##### -->
        <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
            <div class="container h-100 align-items-center">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container col-12 col-md-8 padding-20 rounded " style="background-color: #327726;">
            <div class="row justify-content-md-center"> 
                <div class="col-12 col-md-8">
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-6 col-md-4">
                    <button class="btn btn-outline-light my-2 my-sm-0 btn-lg">Groups</button>
                    <button class="btn btn-outline-light my-2 my-sm-0 btn-lg">Calendar</button>
                </div>
            </div>
        </div>

        <div class="container col-12 padding-60 rounded" style="background-color: silver;">
            <div class="container col-12 col-md-8" style="background-color: red;">
                <div class=""></div>
            </div>
            <div class="container col-12 col-md-4" style="background-color: blue;"></div>
        </div>

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer_area clearfix padding-top-20" style="background-color: #327726;color: white;" >
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>UDM Planner</h5>
                        <hr class="light">
                        <p>55-555-5555</p>
                        <p>udmevents@gmail.com</p>
                        <p>Universidad De Manila</p>
                        <p>Manila,Phillippines</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Our Hours</h5>
                        <hr class="light">
                        <p>Monday-Friday :  9am-7pm</p>
                        <p>Sat-Sun: Closed</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('/img/bg-img/udm.png')}}" style="width: 100%;">
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <p>
                        
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by Universidad De Manila | College of Engineering & Technology
                        
                        </p>
                    </div>
                </div>
                
            </div>


        </footer>
    </body>
</html>
