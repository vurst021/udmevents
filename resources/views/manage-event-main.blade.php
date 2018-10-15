@include('layouts.header')
@yield('header')
<div class="container-fluid section-padding-80" style="padding-top:0" background="white">
	<div class="row">
		<div class="col-md-2">
			@include('layouts.manage-event-side-nav')
		</div>
		<div class="col-md-10">
            @yield('content')
        </div>
	</div>	
</div>

@include('layouts.footer')
        @yield('scripts')
    </body>
</html>
