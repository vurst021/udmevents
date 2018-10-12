@include('layouts.header')

<div class="container section-padding-80">
    <div class="container ">
      <div class="row card">
        <div class="col-12" >
   
   
          
            <div class="container-fluid card-header">
              <h2 class="panel-title">{{ Auth::user()->user_fname}} {{ substr(Auth::user()->user_mname, 0, 1)}}. {{ Auth::user()->user_lname}}</h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> <img alt="User Pic" src="{{ asset('/img/user-img/'.  Auth::user()->user_pic)}}" class="img-circle img-responsive">
                  
                  <!-- Change Picture -->
                  <form action="{{ url('/')}}/uploadPhoto" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3"> 
                      <div class="custom-file">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="file" class="custom-file-input border border-dark " name="pic" id="inputGroupFile02" >
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Click to Browse</label>
                      </div>
                      <div class="input-group-append">
                        <input class="input-group-text btn btn-success" type="submit" id="inputGroupFileAddon02"></span>
                      </div>
                    </div>

                  </form>
                 </div>
                


                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->

                <div class=" col-md-8 col-lg-8 ">
                <form action="{{ url('/updateProfile' )}}" method="POST" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Last Name:</td>
                        <td> <input type="text" name="user_lname" class="col-6 form-control{{ $errors->has('user_lname') ? ' is-invalid' : '' }}" value="{{ Auth::user()->user_lname }}" />
                          @if ($errors->has('user_lname'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('user_lname') }}</strong>
                              </span>
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="user_fname" class="col-6 form-control{{ $errors->has('user_fname') ? ' is-invalid' : '' }}" value="{{ Auth::user()->user_fname }}" />
                          @if ($errors->has('user_fname'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('user_fname') }}</strong>
                              </span>
                          @endif</td>
                      </tr>
                      <tr>
                        <td>Middle Name:</td>
                        <td><input type="text" name="user_mname" class="col-6 form-control{{ $errors->has('user_mname') ? ' is-invalid' : '' }}" value="{{ Auth::user()->user_mname }}" />
                          @if ($errors->has('user_mname'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('user_mname') }}</strong>
                              </span>
                          @endif</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" class="col-6 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ Auth::user()->email }}" />
                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif</td>
                      </tr>
                        <tr>
                        <td>Contact Number:</td>
                        <td><input type="text" name="user_contact" class="col-6 form-control{{ $errors->has('user_contact') ? ' is-invalid' : '' }}" value="{{ Auth::user()->user_contact }}" />
                          @if ($errors->has('user_contact'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('user_contact') }}</strong>
                              </span>
                          @endif</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
                    <div class="card-footer" style="padding: 20px;margin-bottom: 20px;">
                       
                        <span class="pull-right" style="margin-bottom: 20px;">
                          <input data-original-title="Save Changes" type="submit" class="btn btn-success" value="Save Changes" />
                          <a href="{{ url('/profile')}}/{{Auth::user()->user_slug }}" data-original-title="Go Back to Profile" data-toggle="tooltip" type="button" class="btn btn-secondary">Back</a>
                          
                        </span>
                    </div>
            </form>
          </div>
        
      </div>
    </div>
</div>

@include('layouts.footer')

<script js>

/* show file value after file select */
$('.custom-file-input').on('change',function(){
  $(this).next('.form-control-file').addClass("selected").html($(this).val());
})

/* method 2 - change file input to text input after selection
$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.form-control-file').hide();
    $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
})
*/
  
</script>
</body>
</html>