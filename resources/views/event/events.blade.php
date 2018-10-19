
@include('layouts.header')
  
  <style type="text/css">
    
    .navbar{
      font-size: 30px;
    }
    .navbar .nav-item .nav-link{
      font-size: 20px;
    }
    .sticky-top{
      top: 100px;
      height: 60px;
      margin-bottom: 60px;
      margin-right: 0px;
    }

    .profile-card-5 .card-img-block {
          width: 91%;
          margin: 0 auto;
          position: relative;
          top: -20px;
    }
    .profile-card-5 .card-img-block img{
        border-radius:5px;
        box-shadow:0 0 10px rgba(0,0,0,0.63);
    }
    .profile-card-5 h5{
          color:#4E5E30;
          font-weight:600;
      }
      .profile-card-5 p{
          font-size:14px;
          font-weight:300;
      }
      .profile-card-5 .btn-primary{
          background-color:#4E5E30;
          border-color:#4E5E30;
      }

    .side-bar li a{

        font-family: Copperplate Gothic;
        font-weight: .2px;  
      }
      .side-bar li a:hover{
        color: #c6e2ff;
      }
    
  </style>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container-fluid">
{{--           <div class="container col-8 align-self-end sticky-top" style="background-color: #c6e2ff;z-index: 14;">
            <div class="">
              <h1>Events</h1>
            </div>
          </div> --}}
            <div class="row">
                <div class="col-4 side-bar card" >
                  <h2 style="font-family: Copperplate Gothic;margin-bottom:30px;">By Organizations</h2>
                  <ul>
                    
                    @foreach ($organizations as $org)
                      <li style="margin-bottom: 20px;" ><a href="{{route('event.catSearch', $org->org_id )}}">{{ $org->org_name}}</a></li>
                    @endforeach
                  </ul>
                </div>
                  <div class="col-8 row"> 
                            
                              <!--Profile Card 5-->
                              @if($events != "")

                                @foreach($events as $event)
                                  <div class="col-md-4 mt-4" style="font-family: Copperplate Gothic;" >
                                      <div class="card profile-card-5" style="height: 450px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
                                          <div class="card-img-block">
                                              <img class="card-img-top" src="{{ asset('img/core-img/event1.jpg') }}" alt="Card image cap">
                                          </div>
                                              <div class="card-body pt-0">
                                                <p>{{$event->eventStatusEvent->event_date_start}}</p>
                                              <h5 class="card-title">{{$event->eventStatusEvent->event_name}}</h5>
                                              <p>{{$event->eventStatusEvent->event_place}}</p>
                                              <p class="card-text text-muted text-truncate"></p>
                                              <p >
                                                @if($event->eventStatusEvent->event_fee)
                                                    {{$event->eventStatusEvent->event_fee}}
                                                @else
                                                    Free
                                                @endif
                                            </p>
                                              <a href="{{ route('event.view')."/".$event->eventStatusEvent->event_id }}" class="btn btn-primary">View Event Details</a>
                                            </div>
                                          </div>
                                  </div>
                                @endforeach
                              @else
                              <div>
                                  <h3>No Results Found</h3>
                                </div>
                              @endif
                             
                        </div>
                    </div>
                    
                
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    @include('layouts.footer')


</body>

</html>