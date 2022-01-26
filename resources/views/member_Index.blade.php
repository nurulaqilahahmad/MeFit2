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
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Membership Plan</a></li>
                    <li><a class="nav-link scrollto" href="#team">Training Session</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up ">A WORLD OF FUN WORKOUTS</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Party hard with your trainers squad! Check out our pricing and get ready to sweat it out!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Subscribe</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/Gym.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Membership Plan</h2>
                <p>Subscribe one of these</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">
                @foreach ($membershipPlan as $membershipPlan)
                <div class="col-lg-3 col-md-5 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">{{$membershipPlan->membershipPlanName}}</h3>
                        <div class="price"><sup>RM</sup>{{$membershipPlan->membershipPlanCost}}<span> / mo</span></div>
                        <img src="{{$membershipPlan->membershipPlanImage}}" class="img-fluid" alt="">
                        <ul>
                            <li class="member-info">{{$membershipPlan->membershipPlanDescription}}</li>
                            <li></li>
                        </ul>
                        <form action="/memberMembershipPlan" method="post">
                            @csrf
                            <input type="hidden" name="memberID" id="memberID" value="{{$member->memberID}}">
                            <input type="hidden" name="membershipPlanID" id="membershipPlanID" value="{{$membershipPlan->membershipPlanID}}">
                            <input class="btn-buy readmore stretched-link mt-auto" type="submit" value="Let's do it!">
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section><!-- End Pricing Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

        <header class="section-header">
                <h2>Training Session</h2>
                <p>Choose Based on Your Concern</p>
                <br>
                <div class="text-center text-lg-start">
                    <div class="box" display="table-cell">
                        <a href="member_TrainingSessionList" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">See List <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </header>
        </div>

    </section><!-- End Team Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Gym</h2>
                <p>Get lit on the gym floor with our range of free weights, strength and functional equipment.
                    Work it out and leave feeling like a star!</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="assets/img/workout.jpg" class="img-fluid" alt="">
                        <h3>Unlimited Hit Classes</h3>
                        <p>Get your fit fix with HIIT classes monthly on top of your gym access; includinh
                            our Signature programmes like LightFit, Boxing circuit and Playground. Increase your muscle endurance
                            and stamina, and burn calories to the extreme and unleash the warrior in you.
                            You'll finish off sweatier and sexier than you've ever been before.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="assets/img/yoga.png" class="img-fluid" alt="">
                        <h3>Unlimited Mind and Body</h3>
                        <p>Power up your hot bod and mind with access to yoga classes monthly on top of
                            your gym access; including Signature programmes like Pilates Yoga and Let's Strech.
                            Go through a seamless flow of energising poses that will leave your metabolism blazing.
                            Expect to strut out with improved flexibility and stamina, and feel stoger than ever before.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="assets/img/cycling.jpg" class="img-fluid" alt="">
                        <h3>FUnlimited Cycling</h3>
                        <p>Turn down the lights, turn up the heat and drop the bass with cycling classes
                            monthly on top of your gym access; including our Signature programmes like Race 30 and RPM!
                            Take up the challenge and give your workout a spin to reach higher levels of fitness,
                            endurance and streght.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Trainers</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Classes</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="189" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Equipment</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Services</h2>
                <p>In MeFit, we offer only the best for our clients</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="assets/img/features.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Flexible hours</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Quality Equipment</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Different types of classes</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Can choose your own trainer</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Can choose packages</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->


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