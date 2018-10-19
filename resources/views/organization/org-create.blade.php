@extends('main')
@section('content')
<div class="container section-padding-80">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
              <div class="card-header"> Request an event</div>
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        <h2>{{ session()->get('success_message')}}</h2>
                    </div>
                @elseif(session()->has('danger_message'))
                    <div class="alert alert-danger">
                        <h3>`{{ session()->get('danger_message')}}</h3>
                    </div>
                @endif

                
            
              <div class="card-body">
                <form action="{{route('event.store')}}" method="post" id="locationForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="title">Organization Name</label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Organization Name">
                                        <span class="error">{{$errors->first('title')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea
                                                id="description"
                                                name="org_description" class="form-control"
                                                placeholder="Enter the description"></textarea>
                                        <span class="error">{{$errors->first('org_description')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label for="title">Organization Abbreviation</label>
                                        <input type="text" name="org_slugs" id="org_slugs" class="form-control"
                                               placeholder="e.g OSA, CAE, CAS">
                                        <span class="error">{{$errors->first('org_slugs')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Organization Head</label>
                                        <select name="type" id="eventType" class="form-control" placeholder="Enter the event">
                                            
                                            @foreach($eventTypes as $evtType)
                                            <option value="{{ $evtType->event_type_id }}">{{ $evtType->event_type_name }}</option>
                                            @endforeach
                                            
                                        </select>
                                        <span class="error">{{$errors->first('eventType')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Organization</label>
                                        <select name="organization" id="organizer" class="form-control" placeholder="Event Organizer">
                                            
                                            @foreach($organizations as $org)
                                            <option value="{{ $org->org_id }}">{{ $org->org_name }}</option>
                                            @endforeach


                                        </select>    
                                        <span class="error">{{$errors->first('organizer')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Event place</label>
                                        <select name="place" id="title" class="form-control" placeholder="Enter the event">
                                            
                                            @foreach ($venues as $venue)
                                            <option value="{{ $venue->venue_id }}" >{{ $venue->venue_name }}</option>
                                            @endforeach
                                            

                                        </select>
                                        <span class="error">{{$errors->first('title')}}</span>
                                    </div>

                                    <div class="col-md-4 offset-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i> Send Request
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
              


            </div>
        </div>
    </div>
</div>
    <script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
        })
    </script>
@endsection