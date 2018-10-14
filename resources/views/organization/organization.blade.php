@include('layouts.header')
  
  <style type="text/css">
    *{
      
    }
    .nav-item{
      width: 73px;
      font-size: 20px;
    }
    .sticky-top {
      background-color: yellow;
      top: 90px;
      width: 100%;
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
                        <h2>Organizations</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 side-bar" >
                  <h2 style="font-family: Copperplate Gothic;margin-bottom:30px;">By Colleges</h2>
                  <ul>
                    
                    @foreach ($colleges as $col)
                      <li style="margin-bottom: 20px;" ><a href="{{route('organization.proCol', $col->col_id )}}">{{ $col->col_name}}</a></li>
                    @endforeach
                  </ul>
                </div>

                <!-- Organization View-->
                <div class="row event-page col-8">   

                      @foreach ($organization as $org)
                      <!--Profile Card 5-->
                      <div class="col-md-4 mt-5" style="font-family: Copperplate Gothic;">
                          <div class="card profile-card-5" style="">
                              <div class="card-img-block">
                                  <img class="card-img-top" src="{{ asset('img/org-img/'. $org->org_slug. '.jpg') }}" alt="Card image cap">
                              </div>
                                  <div class="card-body pt-0">
                                  <h5 class="card-title">{{ strtoupper($org->org_slug) }}</h5>
                                  <p class="card-text text-muted text-truncate">{{ $org->org_description }}</p>
                                  <a href="{{ route('organization.show', $org->org_slug )}}" class="btn btn-primary">View Organization</a>
                                </div>
                              </div>
                              
                      </div>
                      @endforeach
                            

                </div>
                   
            
   
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->



    @include('layouts.footer')



    
</body>

</html>