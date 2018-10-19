@extends('main')

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url('{{URL::asset('img/bg-img/breadcumb.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Manage  Organization Heads</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

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

        <div class="container-fluid section-padding-80" style="padding-top:0;">
            <div class="row">
                <div class="col-10 offset-md-1">
                    <table class="table-striped col-md-12">
                        <thead>
                            <tr>
                                <th>
                                    Organization
                                </th>
                                <th>
                                    Organization Head
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($organizations as $organization)
                            <tr>
                                <td>{{$organization->org_name}}</td>
                                <td>{{($organization->user)? $organization->user->user_fname :''}} {{($organization->user)? $organization->user->user_mname :''}} {{($organization->user)? $organization->user->user_lname :''}}
                                </td>
                                <td>
                                    <a href="{{ route('dean.organization.edit') }}/{{$organization->org_id}}">Edit</a>
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