<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Bumimas</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <!-- Revolution Slider -->
    <link
      href="assets/plugins/revolution/css/settings.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- REVOLUTION SETTINGS STYLES -->
    <link
      href="assets/plugins/revolution/css/layers.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- REVOLUTION LAYERS STYLES -->
    <link
      href="assets/plugins/revolution/css/navigation.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- REVOLUTION NAVIGATION STYLES -->

    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="shortcut icon"
      href="assets/images/logo-bumimas.png"
      type="image/x-icon"
    />
    <link rel="icon" href="assets/images/logo-bumimas.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
  </head>

  <body class="hidden-bar-wrapper">
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <!-- End Preloader -->

      <!-- Header Style Four -->
      <header class="main-header header-style-four">
        <!-- Header Lower -->
        <div class="header-lower">
          <div class="auto-container">
            <div class="inner-container clearfix">
              <!-- Logo Box -->
              <div class="pull-left logo-box">
                <div class="logo">
                  <a href="/"
                    ><img src="assets/images/logo-bumimas.png" alt="" title="" width="120" height="20"
                  /></a>
                </div>
              </div>

              <!-- Nav Outer -->
              <div class="nav-outer clearfix">
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler">
                  <span class="icon flaticon-menu"></span>
                </div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md outer-box">
                  <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-toggle="collapse"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <div
                    class="navbar-collapse collapse clearfix"
                    id="navbarSupportedContent"
                  >
                    <ul class="navigation clearfix" style="z-index: 1">
                      <li class="current">
                        <a href="/">Home</a>
                        <!-- <ul>
                          <li><a href="index.html">Business Version</a></li>
                          <li><a href="index-2.html">SEO Version</a></li>
                          <li><a href="index-3.html">App Version</a></li>
                          <li><a href="index.html">Shopify Version</a></li>
                          <li><a href="index-5.html">Crypto Version</a></li>
                          <li><a href="index-6.html">Finance Version</a></li>
                          <li class="dropdown">
                            <a href="#">Header Styles</a>
                            <ul>
                              <li><a href="index.html">Header Style One</a></li>
                              <li>
                                <a href="index-2.html">Header Style Two</a>
                              </li>
                              <li>
                                <a href="index-3.html">Header Style Three</a>
                              </li>
                              <li>
                                <a href="index.html">Header Style Four</a>
                              </li>
                              <li>
                                <a href="index-5.html">Header Style Five</a>
                              </li>
                              <li>
                                <a href="index-6.html">Header Style Six</a>
                              </li>
                            </ul>
                          </li>
                        </ul> -->
                      </li>
                      <li><a href="#aboutUs">About us</a></li>
                      <li>
                        <a href="#services">Services</a>
                      </li>
                      <li><a href="#testimonials">Testimonials</a></li>
                      <li><a href="#faq">FAQ's</a></li>

                      <li><a href="#footer">Contact</a></li>
                      @auth
                  <li class="dropdown">
                    <a href="#" style="color: #000;">
                        {{ Auth::user()->name }}
                    </a>
                    <ul>
                      <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                        {{-- <li>
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        
                            <button type="submit">Logout</button>
                        </form>
                        </li> --}}
                    </ul>
                  </li>
                  @else
                  <div class="button-box-navbar">
                    <a href="/register" class="theme-btn btn-style-eleven"
                      ><span class="txt"
                        >Sign Up <i class="flaticon-next-3"></i></span
                    ></a>
                  </div>
                  @endauth
                    </ul>
                  </div>

                  

                  {{-- <!-- Button Box -->
                  <div class="button-box">
                    <a href="/register" class="theme-btn btn-style-eleven"
                      ><span class="txt"
                        >Sign Up <i class="flaticon-next-3"></i></span
                    ></a>
                  </div>
                  <!-- End Button Box --> --}}
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header Lower -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
          <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
              <a href="/" title=""
                ><img src="assets/images/logo-bumimas.png" alt="" title="" width="100"
              /></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
              <!-- Main Menu -->
              <nav class="main-menu">
                <!--Keep This Empty / Menu will come through Javascript-->
              </nav>
              <!-- Main Menu End-->

              <!-- Mobile Navigation Toggler -->
              <div class="mobile-nav-toggler">
                <span class="icon flaticon-menu-1"></span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
            <span class="icon flaticon-multiply"></span>
          </div>

          <nav class="menu-box">
            <div class="nav-logo">
              <a href="/"
                ><img src="assets/images/logo-bumimas.png" alt="" title="" width="100"
              /></a>
            </div>
            <div class="menu-outer">
              <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
          </nav>
        </div>
        <!-- End Mobile Menu -->
      </header>
      <!-- End Main Header -->

        <!-- Main Slider -->
        @yield('content')


          <!-- Footer Style Two -->
    <footer class="footer-style-two" id="footer">
        <div class="auto-container">
          <!-- Widgets Section -->
          <div class="widgets-section">
            <div class="row clearfix">
              <!-- Column -->
              <div class="big-column col-lg-6 col-md-12 col-sm-12">
                <div class="row clearfix">
                  <!-- Footer Column -->
                  <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                      <div class="logo">
                        <a href="/"><img src="assets/images/logo-bumimas.png" alt="" width="100" /></a>
                      </div>
                      <div class="text">
                        PT. BUMI MAS INDONESIA MANDIRI is here to provide solutions when it is difficult to find job opportunities by channeling workers abroad to Middle East, Asia, Europe, and America.
                      </div>
                      <!-- Social Box -->
                      {{-- <ul class="social-box style-two">
                        <li>
                          <a href="https://www.facebook.com/" class="fa fa-facebook-f"></a>
                        </li>
                        <li>
                          <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                        </li>
                      </ul> --}}
                    </div>
                  </div>
  
                  <!-- Footer Column -->
                  <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                      <h5>Services</h5>
                      <ul class="nav-list">
                        <li><a href="#">Ensure Worker Safety</a></li>
                        <li><a href="#">Job Opportunities</a></li>
                        <li><a href="#">Improving Quality</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Column -->
              <div class="big-column col-lg-6 col-md-12 col-sm-12">
                <div class="row clearfix">
                  <!-- Footer Column -->
                  <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                      <h5>Other</h5>
                      <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                          <ul class="nav-list">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Sponsors</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Need a Career?</a></li>
                          </ul>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                          <ul class="nav-list">
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Clients Say</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Footer Column -->
                  <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                      <h5>Get In Touch</h5>
                      <ul class="list-style-one style-two">
                        <li>
                          <span class="icon flaticon-email"></span>
                          bmim_pt@yahoo.com
                        </li>
                        <li>
                          <span class="icon flaticon-telephone"></span> Phone :
                          62-21-84992468
                        </li>
                        <li>
                          <span class="icon flaticon-telephone"></span> Phone :
                          62-812-8095-2809
                        </li>
                        <li>
                          <span class="icon flaticon-telephone"></span> Fax :
                          62-21-8471341
                        </li>
                        <li>
                          <span class="icon flaticon-map"></span>Jl. Mesjid No. 31 RT. 04/RW. 10 Jatikramat, Kec. Jatiasih. Kota Bekasi, Jawa Barat 17421.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Footer Bottom -->
          <div class="footer-bottom">
            <div class="copyright">
              &copy; 2023
              <a href="#">Bumimas.</a> All rights reserved
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer Style Two -->
    </div>
    <!-- End PageWrapper -->
  
  
    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-arrow-up"></span>
    </div>
  
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  
    <!-- Revolution Slider -->
    <script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/plugins/revolution/js/main-slider-script.js"></script>
    <!-- For Js Library -->
  
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/jquery.paroller.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
  
  </html>