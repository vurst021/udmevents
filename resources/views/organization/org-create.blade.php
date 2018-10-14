@extends('main')@section('content')
<div class="container section-padding-80">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
              <div class="card-header"> Create Organization </div>
              <div class="card-body">
                <form action="" method="post" id="locationForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="title">Organization Name</label>
                                        <input type="text" name="org_name" id="org_name" class="form-control" placeholder="Enter Organization's Name">
                                        <span class="error">{{$errors->first('org_name')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Organization Abbreviation </label>
                                        <input type="text" name="org_slug" id="org-slug" class="form-control"
                                               placeholder="Enter the event start date">
                                        <span class="error">{{$errors->first('org_slug')}}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Organization Description</label>
                                        <textarea
                                                id="org_description"
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
                                        <label for="title">College</label>
                                        <select name="org_colID[]" id="org_colID" class="form-control" placeholder="College">
                                            <option>Choose College</option>
                                            @foreach ($colleges as $college)
                                            <option value="{{ $college->col_id }}">{{ $college->col_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="error">{{$errors->first('org_colID')}}</span>
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