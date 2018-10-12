@include('layouts.header')
    

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="img/core-img/event1.jpg" alt="">
                <img src="img/core-img/event1.jpg" alt="">
                <img src="img/core-img/event1.jpg" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix" style="height: 600px; overflow-y: scroll;">
            @foreach($event)
            <p>{{ $event->event_date_start }} | {{ $event->event_date_end }} <br>
            Cecilio Munoz Palma Hall</p>
                <h2>{{ $event->event_name}}</h2>
            
            <p ><img src="img/org-img/jpcs.png" class="rounded-circle" style="width: 100px;"> Hosted by: Junior Philipine Computer Society </p>
            <p class="product-desc"><h4>Details:</h4>  
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>
                <p> Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>


                <hr>
            <div class="container">
                <!-- Form -->
                <p><strong class="mr-4">Are you going?</strong>Respond until February 16, 2018</p>
                <form class="cart-form clearfix" method="post">
                    
                    
                    <!-- Cart & Favourite Box -->
                    <div class="cart-fav-box d-flex align-items-center">
                        <!-- Cart -->
                        <a type="submit" href="{{ route('join.event')}}" class="btn essence-btn">Going</a>
                        <!-- Favourite -->
                        <a type="submit" class="btn essence-btn-secondary ml-4" >No</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

   @include('layouts.footer')
</body>

</html>