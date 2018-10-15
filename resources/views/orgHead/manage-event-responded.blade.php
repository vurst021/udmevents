@extends('manage-event-main')

@section('header')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url('{{URL::asset('img/bg-img/breadcumb.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>{{($status == '1')? 'Accepted': 'Rejected'}}   Attendees at {{$event->event_name}}</h2>
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
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message')}}
                </div>
            @elseif(session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('danger_message')}}
                </div>
            @endif
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
                    <table class=" table table-hover">
                        <thead>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    Action Date
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventAttendees as $eventAttendee)
                            <tr>
                                <td>
                                    {{$eventAttendee->user->user_lname}}, {{$eventAttendee->user->user_fname}}
                                </td>
                                <td>
                                    {{date("F d Y",strtotime($eventAttendee->updated_at))}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->


    <script type="text/javascript" src="js/meganav.js"></script>
@endsection