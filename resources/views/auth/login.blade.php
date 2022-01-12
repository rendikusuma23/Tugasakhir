@extends('layouts.applogin')

@section('content')
<body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <img src="{{asset('lte/login/images/child.svg')}}" alt="Image" class="img-fluid">
             </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <div class="text-center">
                    <img class="profile-user-img mb-3 img-fluid img-circle"
                         src="{{asset('lte/dist/img/tk')}}.jpg"
                         alt="User profile picture"
                         style="height: 150px" >
                  </div>
                <h4> <strong>Siakad Kelompok bermain & taman kanak-kanak plus dewi masyithoh</strong></h4>
                <p class="mb-4 text-dark"> Masuk untuk akses ke layanan akademik sekolah dengan mudah dan cepat</p>
              </div>
              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group first">
                  <label for="Email">Username</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>
  
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
  
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror                
                </div>
                
                <!-- <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div> -->
  
                <input type="submit" value="LOGIN" class="btn text-white btn-block btn-primary">
  
                <!-- <span class="d-block text-left my-4 text-muted"> or sign in with</span>
                
                <div class="social-login">
                  <a href="#" class="facebook">
                    <span class="icon-facebook mr-3"></span> 
                  </a>
                  <a href="#" class="twitter">
                    <span class="icon-twitter mr-3"></span> 
                  </a>
                  <a href="#" class="google">
                    <span class="icon-google mr-3"></span> 
                  </a>
                </div> -->
              </form>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  
    
   
    </body>
@endsection
