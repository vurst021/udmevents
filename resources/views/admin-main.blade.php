@include('layouts.header')
@yield('admin-header')
	<div class="row">
		<div class="col-md-2">
			@include('layouts.admin-side-nav')
		</div>
		<div class="col-md-10">
            @yield('content')
        </div>
	</div>
@include('layouts.footer')
        @yield('scripts')
    </body>
</html>
