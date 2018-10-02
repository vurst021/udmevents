@extends('main')
@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url('{{URL::asset('img/bg-img/breadcumb.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Requested   Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        {{-- <h2>Upcoming Events</h2> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-10 offset-md-1">
                  <table class="table ">
                    <thead>
                      <tr>
                        <td>Event Name</td>
                        <td>Date Start</td>
                        <td>Time Start</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    @foreach($events as $event)
                      <tr>
                        <td>{{$event->event_name}} </td>
                        <td>{{date("Y-m-d", strtotime($event->event_date_time_start))}} </td>
                        <td>{{date("H:i:s", strtotime($event->event_date_time_start))}} </td>
                        <td><a href="">Approve</a> | <a href="">Reject</a> </td>

                      </tr>
                    @endforeach
                  </table>
    </section>
    <!-- ##### Shop Grid Area End ##### -->


    <script type="text/javascript" src="js/meganav.js"></script>
@endsection