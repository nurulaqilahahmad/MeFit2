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
        <img src="assets/img/logoMF.png" alt="">
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
  <br>
  <br>
  <!-- user profile -->
  <section class="section profile">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    <div class="row">
        <div class="col-xl-2"></div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <!-- Profile Edit Form -->
              <div class="tab-pane fade show active profile-edit" id="profile-edit">
                <form method="post" action="/editMemberProfile">
                  @csrf
                  <input type="hidden" name="memberID" id="memberID" value="{{$member->memberID}}">
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <label for="myfile">Select a file:</label>
                      <input type="file" id="memberImage" name="memberImage">
                    </div>
                  </div>
                  

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Fullname</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="memberFullname" type="text" class="form-control" id="memberFullname" value="{{$member->memberFullname}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="memberUsername" type="text" class="form-control" id="memberUsername" value="{{$member->memberUsername}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Description</label>
                    <div class="col-md-8 col-lg-9">
                      <textarea name="memberDescription" class="form-control" id="memberDescription" style="height: 100px">{{$member->memberDescription}}</textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="memberTelno" type="text" class="form-control" id="memberTelno" value="{{$member->memberTelno}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="memberEmail" type="text" class="form-control" id="memberEmail" value="{{$member->memberEmail}}">
                    </div>
                  </div>

                  <div class="text-center">
                    <input class="btn btn-primary" type="submit" value="Save Changes">
                  </div>
                </form><!-- End Profile Edit Form -->
              </div>            
              </div>
            </div>
            <div class="col-xl-2"></div>
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