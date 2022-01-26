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

            <a href="member_Index" class="logo d-flex align-items-center">
                <img src="{{url('assets/img/logoMF.png')}}" alt="">
                <span>MeFit</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li class="dropdown"><a href="#"><span>{{$member->memberUsername}}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="member_Profile">Profile</a></li>
                            <li><a href="member_ProfileSettings">Profile Settings</a></li>
                            <li><a href="memberSignOut">Sign Out</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Training Session List</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">
                @foreach ($trainingSession as $trainingSession)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <form action="/bookTrainingSession" method="post">
                        @csrf
                        <input type="hidden" name="trainingSessionID" id="trainingSessionID" value="{{$trainingSession->trainingSessionID}}">
                        <input type="hidden" name="memberID" id="memberID" value="{{$member->memberID}}">
                        <input type="hidden" name="trainerID" id="trainerID" value="{{$trainingSession->trainerID}}">
                        <input type="hidden" name="trainingSessionStartTime" id="trainingSessionStartTime" value="{{$trainingSession->trainingSessionStartTime}}">
                        <input type="hidden" name="trainingSessionEndTime" id="trainingSessionEndTime" value="{{$trainingSession->trainingSessionEndTime}}">
                        <input type="hidden" name="trainingSessionDay" id="trainingSessionDay" value="{{$trainingSession->trainingSessionDay}}">
                        <input type="hidden" name="trainingSessionName" id="trainingSessionName" value="{{$trainingSession->trainingSessionName}}">
                        <input type="hidden" name="trainerFullname" id="trainerFullname" value="{{$trainingSession->trainerFullname}}">
                        <h3 style="color: #07d5c0;">{{$trainingSession->trainingSessionName}}</h3>
                        <div class="price"><sup>RM</sup>{{$trainingSession->trainingSessionCost}}<span> / mo</span></div>
                        <ul>
                            <li>Trained by {{$trainingSession->trainerFullname}} (<a href="member_TrainerProfile/{{$trainingSession->trainerID}}">View Profile)</a></li>
                            <li>{{$trainingSession->trainingSessionStartTime}} - {{$trainingSession->trainingSessionEndTime}}</li>
                            <li>{{$trainingSession->trainingSessionDay}}</li>
                        </ul>
                        <input class="btn-buy" type="submit" value="Book">
                        </form>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>

        </div>

    </section><!-- End Pricing Section -->
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