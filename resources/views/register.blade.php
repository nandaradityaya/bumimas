@extends('layouts.navbar')

@section('content')
    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
            <!-- <div class="title">Join With Us</div> -->
            <h2>
              <span>Register Your Account</span>
            </h2>
          </div>
  
          <div class="inner-container">
            <div class="feature-block-two">
              <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <span class="icon transition-500ms">
                  <img src="assets/images/icons/feature-8.png" alt="">
                </span>
                <h5>Registration</h5>
                <form action="register" method="POST">
                  @csrf
                  <div class="contact-form">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Nama*" id="inputNama">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email*" id="inputEmail">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password*"
                        id="inputPassword">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Confirm Password*"
                        id="inputPassword">
                    </div>
                  </div>
                  <div class="button-box">
                    <button type="submit" class="theme-btn btn-style-two"><span class="txt">Register <i
                          class="fa fa-angle-right"></i></span></button>
                  </div>
                </form>
  
                
                <div class="d-flex mt-3 mb-3">
                  <div class="ms-auto">
                    <a href="/login">Already have an acoount?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Form Section -->
@endsection