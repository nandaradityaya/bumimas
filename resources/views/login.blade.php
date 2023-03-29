@extends('layouts.navbar')

@section('content')
        <!-- Contact Form Section -->
        <section class="contact-form-section">
            <div class="auto-container">
              <!-- Sec Title -->
              <div class="sec-title centered">
                <!-- <div class="title">Join With Us</div> -->
                <h2>
                  <span>Login Your Account</span>
                </h2>
              </div>
      
              <div class="inner-container">
                <div class="feature-block-two">
                  <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <span class="icon transition-500ms">
                      <img src="assets/images/icons/feature-8.png" alt="">
                    </span>
                    <h5>Login</h5>
                    <form action="{{ route('login') }}" method="POST">
                      @csrf
                      <div class="contact-form">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email*" id="inputEmail" value="{{ old('email') }}">
                          @error('email')
                              <span role="alert">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password*"
                            id="inputPassword" required autocomplete="current-password">
                            @error('password')
                                <span role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="d-flex mt-3 mb-3">
                        <div class="justify-content-start">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                              Remember me?
                            </label>
                          </div>
                        </div>
                        <div class="ms-auto">
                          <a href="/register">Don't have an account yet?</a>
                        </div>
                      </div>
                      <div class="button-box">
                        <button type="submit" class="theme-btn btn-style-two"><span class="txt">Login <i
                              class="fa fa-angle-right"></i></span></button>
                        </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Contact Form Section -->
      
@endsection