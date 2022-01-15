@extends('layouts.app')

@section('content')
<div class="main">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4"  action="/register" method="post">
                        
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="username" class="form-control" value="{{ old('username') }}" name="username"/>
                            <label class="form-label" for="username">Your Username</label>
                                @error('username')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>

                        
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="email" class="form-control" value="{{ old('email') }}" name="email"/>
                            <label class="form-label" for="email">Your Email</label>
                                @error('email')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" class="form-control" name="password" />
                            <label class="form-label" for="passsword">Password</label>
                                  @error('password')
                                      <span class="text-danger text-sm">{{ $message }}</span>
                                   @enderror
                          </div> 
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" />
                            <label class="form-label" for="password_confirmation">Repeat your password</label>
                                @error('password_confirmation')
                                   <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                          </div>
                        </div>
      
                      
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
@endsection

