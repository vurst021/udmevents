@extends('main')@section('content')
    
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        <h2>{{ session()->get('success_message')}}</h2>
                    </div>
                @elseif(session()->has('danger_message'))
                    <div class="alert alert-danger">
                        <h3>`{{ session()->get('danger_message')}}</h3>
                    </div>
                @endif
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
            
            <p>{{date("Y-m-d",strtotime($event->event_date_start))}} | {{date("Y-m-d",strtotime($event->event_date_end))}} <br>
            Cecilio Munoz Palma Hall</p>
                <h2>{{$event->event_name}}</h2>
            
            <p > Hosted by: Junior Philipine Computer Society </p>
            <p class="product-desc"><h4>Details:</h4>  
                {{$event->event_description}}


                <hr>
            <div class="container">
                    
                    
                    <!-- Cart & Favourite Box -->
                    <div class="cart-fav-box d-flex align-items-center">
                        
                        <?php
                        $check = DB::table('attendees')->where('event_ID', '=', $event->event_id)->where('userID', '=', Auth::user()->user_id)->first();
                        
                        if($check == ''){       

                        ?>
                        <p><strong class="mr-4">Do You Want to Join ?</strong></p><div></div>
                        <a href="{{ route('event.join')}}/{{ $event->event_id }}" class="btn essence-btn">Going</a>
                        

                        <?php }else {?>
                        @if($attendeeStatus->att_statusID == 1)\
                            <button  class="btn disabled " toggle="disabled">You're already accepted.
                            </button>
                        @else
                            <button  class="btn disabled " toggle="disabled">Request Already Sent</button>
                            <!-- Favourite -->
                        @endif

                        @if($event->event_fee > 0)
                        <div>
                            @if(!$attendee)
                        <p><i>This is a paid event you may pay in advance.</i></p>
                            
                            <form method="POST" name="paypal" action="{{route('payment.paypal')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="eventID" value="{{$event->event_id}}">
                                <button type="submit"  class="btn essence-btn-secondary ml-4" >Pay now Via PayPal</button>
                            </form>
                            @else
                            <button  class="btn disabled " toggle="disabled">
                                You're Already Paid. 
                            </button>
                            @endif
                        </div>

                        @endif

                        <?php }?>
                             
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

@endsection