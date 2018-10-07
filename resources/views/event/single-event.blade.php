@extends('main')@section('content')
    

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="{{URL::asset('img/core-img/event1.jpg')}}" alt="">
                <img src="{{URL::asset('img/core-img/event1.jpg')}}" alt="">
                <img src="{{URL::asset('img/core-img/event1.jpg')}}" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix" style="height: 600px; overflow-y: scroll;">
            
            <p>{{date("Y-m-d",strtotime($event->event_date_start))}} <br>
            Cecilio Munoz Palma Hall</p>
                <h2>{{$event->event_name}}</h2>
            
            <p ><img src="{{URL::asset('img/org-img/jpcs.png')}}" class="rounded-circle" style="width: 100px;"> Hosted by: Junior Philipine Computer Society </p>
            <p class="product-desc"><h4>Details:</h4>  
                {{$event->event_description}}


                <hr>
            <div class="container">
                <!-- Form -->
                <p><strong class="mr-4">Are you going?</strong>Respond until February 16, 2018</p>
                <form class="cart-form clearfix" method="post">
                    
                    
                    <!-- Cart & Favourite Box -->
                    <div class="cart-fav-box d-flex align-items-center">
                        <!-- Cart -->
                        <button type="submit" name="addtocart" value="5" class="btn essence-btn">Going</button>
                        <!-- Favourite -->
                        <button type="submit" name="addtocart" value="5" class="btn essence-btn-secondary ml-4" >No</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

@endsection