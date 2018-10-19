@include('layouts.header')


    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h2>UDM Events</h2>
                                <p>This web application will help the different organizations in the Univesidad De Manila and also it's administration to organize events that will be conducted within the University. </p>
                                <a href="http://www.udm.edu.ph/udm-history/" target="_blank" class="btn essence-btn">About UDM</a>
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
                    @foreach($events as $event)
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img h-50">
                                <img src="{{URL::asset('img/core-img/')}}/event1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">
                                <!-- group -->
                                <div class="product-group">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{date("F d Y",strtotime($event->eventStatusEvent->event_date_start))}}</span>
                                <a href="single-product-details.html">
                                    <h4>{{$event->eventStatusEvent->event_name}}</h4>
                                </a>
                                <p class="product-venue">{{$event->eventStatusEvent->event_place}}</p>
                                <p class="product-price">
                                    @if($event->eventStatusEvent->event_fee > 0)
                                        {{$event->eventStatusEvent->event_fee}} php.
                                    @else
                                        Free
                                    @endif
                                </p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ route('event.view')."/".$event->eventStatusEvent->event_id }}" class="btn essence-btn">View Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="organization-section" style="background-image: url(img/bg-img/org-bg.jpg); background-size: 100% 100%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="organization-content bg-img background-overlay align-self-end">
                        <div class="h-100 d-flex align-items-center ">
                            <div class="organization-text">
                                <h3>Organizations and Clubs</h3>
                                <p>The University shapes leaders through the different academic organizations and non-academic clubs, by this guidelines not only the students will be future leaders but also creates opportunity to prepare for the career to take and ultimately serve as an asset to this country. </p>
                                <a href="{{ route('organization')}}" class="btn essence-btn">See More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




   

    @include('layouts.footer')

</body>

</html>