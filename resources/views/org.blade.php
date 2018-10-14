@include('layouts.header')
  
  <style type="text/css">
    .nav-item{
      width: 73px;
      font-size: 20px;
    }
    .sticky-top {
      background-color: yellow;
      top: 90px;
      width: 100%;
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
        <div class="container">
            <div class="row">
                <div class="sticky-top container-fluid row event-nav" style="margin-bottom: 50px;">
                    <div class="container-fluid navbar navbar-expand-lg ">
                      <a class="navbar-brand" href="#">Colleges</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav org-nav mr-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CET
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CAS
                            </a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CPA
                            </a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CBE
                            </a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CHS
                            </a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CMC
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CCR
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CIT
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CHK
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              SHS
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CED
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CAE
                            </a>
                          </li>
                        </ul>
                        
                      </div>


                    </div>
                </div>
                    
                <!-- Organization View-->
                <div class="row event-page">
                    @foreach ($organization as $org)
                            <!-- Single Product -->
                            
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img h-50">
                                    <img src="{{ asset('img/org-img/'. $org->org_slug. 
                                    '.jpg') }}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{ asset('img/org-img/'. $org->org_slug. 
                                    '.jpg') }}" alt="">
                                    <!-- group -->
                                    <div class="product-group">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>Date and Time</span>
                                    <a href="single-product-details.html">
                                        <h4>{{ $org->org_name }}</h4>
                                    </a>
                                    <p class="product-venue">{{ $org->org_description }}</p>
                                    <p class="product-price">Price</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      @endforeach       

                            
                            

                        </div>
                    </div>
            
   
                    <!-- Pagination -->
                    <nav aria-label="navigation justify-content-between">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->



    @include('layouts.footer')



    <script type="text/javascript" src="js/meganav.js"></script>
</body>

</html>