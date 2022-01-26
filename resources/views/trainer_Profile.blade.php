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

      <a href="trainer_Index" class="logo d-flex align-items-center">
        <img src="assets/img/logoMF.png" alt="">
        <span>MeFit</span>
      </a>

      <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="trainer_Index">Home</a></li>
                    <li class="dropdown"><a href="#"><span>{{$trainer->trainerUsername}}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="trainer_Profile">Profile</a></li>
                            <li><a href="trainer_ProfileSettings">Profile Settings</a></li>
                            <li><a href="trainerSignOut">Sign Out</a></li>
                        </ul>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{route('trainer_Index')}}">Home</a></li>
        <li>Profile</li>
      </ol>
      <h2>{{$trainer->trainerFullname}}</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- user profile -->
  <section class="section profile">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img class="rounded-circle" src="{{$trainer->trainerImage}}" alt="Profile Picture">
            <br>
            <h2>{{$trainer->trainerFullname}}</h2>
          </div>
        </div>
      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#training-session">Training Session</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <br>
                <h5 class="card-title">Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Fullname</div>
                  <div class="col-lg-9 col-md-8">{{$trainer->trainerFullname}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Username</div>
                  <div class="col-lg-9 col-md-8">{{$trainer->trainerUsername}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8">{{$trainer->trainerTelno}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{$trainer->trainerEmail}}</div>
                </div>
                <br>
                <br>
                <h5 class="card-title">Description</h5>
                <p class="small fst-italic">{{$trainer->trainerDescription}}</p>
              </div>

              <!--Training Session-->
              <div class="tab-pane fade pt-3" id="training-session">
              <div class="read-more">
                <a href="trainer_AddTrainingSession">Add Training Session</a>
              </div>
              <br>          
              <br>
              @foreach ($trainingSession as $trainingSession)
                <h5 class="card-title">{{$trainingSession->trainingSessionName}}</h5>
                
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Description</div>
                  <div class="col-lg-9 col-md-8">{{$trainingSession->trainingSessionDescription}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Trained by</div>
                  <div class="col-lg-9 col-md-8">{{$trainingSession->trainerFullname}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Contact</div>
                  <div class="col-lg-9 col-md-8">{{$trainingSession->trainerTelno}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Start Time</div>
                  <div class="col-lg-9 col-md-8">{{$trainingSession->trainingSessionStartTime}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">End Time</div>
                  <div class="col-lg-9 col-md-8">{{$trainingSession->trainingSessionEndTime}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Day</div>
                  <div class="col-lg-9 col-md-8">{{$trainingSession->trainingSessionDay}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Cost</div>
                  <div class="col-lg-9 col-md-8">RM {{$trainingSession->trainingSessionCost}}</div>
                </div>
                <br>
              @endforeach
              </div>
              <!--End of Training Session-->
            </div>

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