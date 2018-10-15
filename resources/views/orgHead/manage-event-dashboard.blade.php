@extends('manage-event-main')

@section('header')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url('{{URL::asset('img/bg-img/breadcumb.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Manage   Event</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
@endsection
@section('content')
    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area  clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>{{$event->event_name}}</h3>
                    
                    <h7>{{date("F d",strtotime($event->event_date_start))}} | {{date("h:i:s a",strtotime($event->event_time_start))}} - {{date("h:i:s a",strtotime($event->event_time_end))}}</h7>
                    <br>
                    <h4>Days Until Event:{{$eventCountDown}}</h4>
                </div>
                <div class="col-md-6 offset-md-2 text-center">
                    Event Status
                    <table class="col-md-12 table-striped">
                        <thead>
                            <tr>
                                <td>
                                    Level Admin
                                </td>
                                <td>
                                    Status
                                </td>
                                <td>
                                    Date Updated
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($event->eventStatus as $status)
                            <tr>
                                <td>
                                    {{$status->eventStatusAdmin->adminPosition->position_name}}
                                </td>
                                <td>
                                    {{$status->event_status_status}}
                                </td>
                                <td>
                                    {{date("F d, Y",strtotime($status->created_at))}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
            </div>
            <div class="row" style="margin-top:83px">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-10 text-center single-product-wrapper">
                            <h3>{{count($eventAttendees)}}</h3>
                            <h4>Attendees</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-10 text-center single-product-wrapper">
                            <h3>{{count($eventAttendeesPending)}}</h3>
                            <h4>Pending Attendees</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-10 text-center single-product-wrapper">
                            <h3>{{count($eventAttendeesAccepted)}}</h3>
                            <h4>Accepted Attendees</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-10 text-center single-product-wrapper">
                            <h3>{{count($eventAttendeesRejected)}}</h3>
                            <h4>Rejected Attendees</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->


    <script type="text/javascript" src="js/meganav.js"></script>
@endsection