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

            <a href="welcome" class="logo d-flex align-items-center">
                <img src="{{url('assets/img/logoMF.png')}}" alt="">
                <span>MeFit</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li class="dropdown"><a href="#"><span>Sign In</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="member_SignIn">Member Sign In</a></li>
                            <li><a href="trainer_SignIn">Trainer Sign In</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Sign Up</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="member_SignUp">Member Sign Up</a></li>
                            <li><a href="trainer_SignUp">Trainer Sign Up</a></li>
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
                    <h1 data-aos="fade-up">A WORLD OF FUN WORKOUTS</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Party hard with your trainers squad! Check out our pricing and get ready to sweat it out!</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
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
                <h2>Pricing</h2>
                <p>Check our Pricing</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Gym Subscribtion</h3>
                        <div class="price"><sup>RM</sup>100<span> / mo</span></div>
                        <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                        <ul>
                            <li>Full access to Gym</li>
                            <!-- <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li> -->
                            <li class="na">Class</li>
                            <li class="na">Trainer</li>
                        </ul>
                        <a href="#" class="btn-buy">Let's do it!</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <span class="featured">Recommended</span>
                        <h3 style="color: #65c600;">Starter Plan</h3>
                        <div class="price"><sup>RM</sup>150<span> / mo</span></div>
                        <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                        <ul>


                            <li>2 classes</li>
                            <li>Full acces to gym</li>
                            <li class="na">Trainer</li>
                        </ul>
                        <a href="#" class="btn-buy">Let's do it!</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <h3 style="color: #ff901c;">HIIT packages</h3>
                        <div class="price"><sup>RM</sup>200<span> / mo</span></div>
                        <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                        <ul>

                            <li>can join 5 classes</li>
                            <li>Full access to gym</li>
                            <li>Trainer</li>
                        </ul>
                        <a href="#" class="btn-buy">Let's do it!</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <h3 style="color: #ff0071;">Ultimate Plan</h3>
                        <div class="price"><sup>RM</sup>300<span> / 2mo</span></div>
                        <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                        <ul>

                            <li>Full access to gym</li>
                            <li>Full access to classes</li>
                            <li>Trainer</li>
                        </ul>
                        <a href="#" class="btn-buy">Let's do it!</a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Pricing Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Trainer</h2>
                <p>Choose Based on Your Concern</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/Trainer1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <a href="trainerSchedule1">
                                <h4>Gong Yoo</h4>
                            </a>
                            <span>Tough Trainer</span>
                            <p>Sometimes, you might not respond well to the over-the-top positive and energetic attitude that some personal trainers have to offer. If you prefer a tough trainer, one that won’t allow you to make any kinds of excuses, then this one might be the one for you.

                                They truly believe and live by the famous “no pain, no gain” quote. Their methods are old school, but you will get results in no time.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="assets/img/team/Trainer2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <a href="trainerSchedule2">
                                <h4>Yoo In Na</h4>
                            </a>
                            <span>Cardio Trainer</span>
                            <p>The name says it all. These trainers know everything when it comes to losing weight and burning fat through cardio training. They love making their hearts race and know just how to help you increase resistance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <a href="trainerSchedule.html">
                        <div class="member">
                    </a>
                    <div class="member-img">
                        <img src="assets/img/team/Trainer3.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <a href="trainerSchedule3">
                            <h4>Kim Jisoo</h4>
                        </a>
                        <span>Lifestyle Trainer</span>
                        <p>People looking for immediate results make drastic changes that are difficult to upkeep, such as a restrictive diet and hardcore workouts. The issue with this is that, once people achieve their results, they fall back into old habits, losing all the progress they had worked towards.

                            Lifestyle trainers don’t just make you gain those results you’re looking for but also helps you adjust your entire lifestyle. They help you adopt a new way of living that promotes health as well as mental wellbeing.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/Trainer4.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <a href="trainerSchedule4">
                            <h4>Jung Hae-in</h4>
                        </a>
                        <span>Physique Trainers</span>
                        <p>They know how to target your muscles and work them well in order to help you achieve that body-building figure you want. They also are certified in advising you what kinds of foods you should eat to promote muscle growth.</p>
                    </div>
                </div>
            </div>

        </div>

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