<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MeFit</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logoMF.png" alt="">
                <span>MeFit</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li class="dropdown"><a href="#"><span>Trainer</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="trainer_SignIn">Sign In as Trainer</a></li>
                            <li><a href="trainer_SignUp">Sign Up as Trainer</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up">

                    <div class="reply-form" data-aos="fade-up">
                        <h4>SIGN IN AS MEMBER</h4>
                        <form id="login" method="post" action="/memberSignIn">
                            @if(Session::has('success'))
                            <div data-aos="fade-up" class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div data-aos="fade-up" class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <label data-aos="fade-up" class="justify-content-center"><b>Email</b></label>
                                    <input data-aos="fade-up" name="memberEmail" type="text" class="form-control" placeholder="Email">
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <label data-aos="fade-up" class="justify-content-center"><b>Password</b></label>
                                    <input data-aos="fade-up" name="memberPassword" type="password" class="form-control" placeholder="Password">
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input data-aos="fade-up" class="justify-content-center" type="submit" name="login" id="log" value="Sign In">
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <br>
                                    <span data-aos="fade-up"> First Time? <a data-aos="fade-up" href="member_SignUp">Sign Up</a> </span>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <br>
                                    <span><a data-aos="fade-up" href="member_ForgotPassword">Forgot Password?</a> </span>
                                    <br>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/Gym.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- {{url('assets/img/SignUp.png')}} -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>