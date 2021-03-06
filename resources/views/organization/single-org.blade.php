@include('layouts.header')
    

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="{{ asset('img/org-img/'. $organization->org_slug. '.jpg') }}" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix" style="height: 600px; overflow-y: scroll;">
            
            
            <h2>{{ $organization->org_name }}</h2>
            
           
            <p class="product-desc"><h4>Description:</h4>  
                <p>{{ $organization->org_description }}</p>


                <hr>
            <div class="container border text-center align-items-center">
                <!-- Form -->
                <p><strong class="mr-4">Do You Want to Join ?</strong>Respond until August, 2018</p>
                <form class="cart-form clearfix" method="post">
                    
                    
                    <!-- Cart & Favourite Box -->
                    
                        <div class="cart-fav-box d-flex align-items-center ml-4" style="-webkit-filter: blur(5px);-moz-filter: blur(5px);-o-filter: blur(5px);-ms-filter: blur(5px);">
                            <!-- Cart -->
                            <button type="submit" name="addtocart" value="5" class="btn essence-btn" disable ">Join</button>
                            <!-- Favourite -->
                            <button type="submit" name="addtocart" value="5" class="btn essence-btn-secondary ml-4" >No</button>
                        </div>
                    <h5 style="position: absolute;left:100px;top: 300px;font-family: Copperplate Gothic;">This section is for future expansion</h5>
                </form>
            </div>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

   @include('layouts.footer')
</body>

</html>