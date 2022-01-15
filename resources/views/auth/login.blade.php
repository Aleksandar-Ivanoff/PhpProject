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
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>
      
                      <form class="mx-1 mx-md-4" action="/login" method="post">
                       
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="username" class="form-control" name="username"/>
                            <label class="form-label" for="username">Your Username</label>

                            @error('username')
                            <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror

                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" class="form-control" name="password" />
                            <label class="form-label" for="form3Example4c">Password</label>

                            @error('password')
                            <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                            
                          </div>
                        </div>
                        <a class="aToHover" href="/register">You don't have an account?</a>
      
                       
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4" style="margin-top: 20px">
                          <button type="submit" class="btn btn-primary btn-lg">Login</button>
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