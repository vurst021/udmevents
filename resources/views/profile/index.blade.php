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
                        <input type="file" class="custom-file-input" name="pic" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
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
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Member Since:</td>
                        <td> {{ date("Y/m/d", strtotime(Auth::user()->email_verified_at)) }}</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>{{ ucfirst(Auth::user()->user_gender) }}</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="{{ Auth::user()->email }}">{{ lcfirst(Auth::user()->email) }}</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>{{ Auth::user()->user_contact }} (Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
                 <div class="card-footer" style="padding: 20px;margin-bottom: 20px;">
                       
                        <span class="pull-right">
                            <a href="{{ url('editProfile') }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">Edit Profile</a>
                            
                        </span>
                    </div>
            
          </div>
        
      </div>
    </div>
</div>


@include('layouts.footer')

</body>
</html>