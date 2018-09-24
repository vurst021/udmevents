@include('layouts.header')

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h1>Join an Event</h1>
                        <div class="row justify-content-center">
                            <!-- Search Area -->
                                <div class="search-area">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            <a href="{{ route('events') }}" class="btn essence-btn">Featured Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->

    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="justify-content-center">
                  <h1 class="text-center" style="text-transform: uppercase;">Categories</h1>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
                            <a href="#">Technology</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="#">Business</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Humanitarian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area" style="background-image: url(img/core-img/udm.jpg); background-size: 100% 100%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h2>About This Page</h2>
                                <p>This web application will help the different organizations in the Univesidad De Manila and also it's administration to organize events that will be conducted within the University. </p>
                                <a href="#" class="btn essence-btn">About UDM</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 row">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img h-50">
                                <img src="img/core-img/event1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">
                                <!-- group -->
                                <div class="product-group">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Date and Time</span>
                                <a href="single-product-details.html">
                                    <h4>Title</h4>
                                </a>
                                <p class="product-venue">Venue</p>
                                <p class="product-price">Price</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">View Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper"  >
                            <!-- Product Image -->
                            <div class="product-img h-50">
                                <img src="img/core-img/event2.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">
                                <!-- group -->
                                <div class="product-group">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Date and Time</span>
                                <a href="single-product-details.html">
                                    <h4>Title</h4>
                                </a>
                                <p class="product-venue">Venue</p>
                                <p class="product-price">Price</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">View Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper" >
                            <!-- Product Image --> 
                            <div class="product-img h-50">
                                <img src="img/core-img/event3.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- group -->
                                <div class="product-group">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Date and Time</span>
                                <a href="single-product-details.html">
                                    <h4>Title</h4>
                                </a>
                                <p class="product-venue">Venue</p>
                                <p class="product-price">Price</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">View Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <h1 class="text-center" style="text-transform: uppercase;">School Organizations</h1>
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/org-img/jpcs.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/org-img/iecep.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/org-img/icpep.jpg" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/org-img/rotaract.jpg" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/org-img/jpia.jpg" alt="">
        </div>
        <!-- Brand Logo -->
        
    </div>
    <!-- ##### Brands Area End ##### -->

    @include('layouts.footer')

</body>

</html>