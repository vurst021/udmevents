@extends('main')

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url('{{URL::asset('img/bg-img/breadcumb.jpg')}}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Manage  Organization Head for "{{$org->org_name}}"</h2>
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
            <a href="{{ route('dean.organizations') }}"><button class="btn">Back to organizations</button></a>
                    <div class="section-heading text-center">
                        {{-- <h2>Upcoming Events</h2> --}}
                        Current organization head:
                        @if($org->user)
                        <b>{{$org->user->user_fname}} {{$org->user->user_mname}} {{$org->user->user_lname}}</b>
                        @else
                        <i>No current organization head.</i>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid section-padding-80" style="padding-top:0;">
            <div class="row">
                <div class="col-10 offset-md-1">
                    <table class="col-md-12 table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if(!$user->orgHead && !$user->isAdmin)
                                    <tr>
                                        <td>
                                           {{$user->user_lname}}, {{$user->user_fname}} {{$user->user_mname}}
                                        </td>
                                        <td>
                                            <a href="{{ route('dean.organization.makeOrgHead') }}/{{$org->org_id}}/{{$user->user_id}}">Select</a>
                                        </td>
                                    </tr>
                                @endif
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