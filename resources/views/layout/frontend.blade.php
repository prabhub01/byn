<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AI Nepal || Banepa Youth Network</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/ai-logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/slicknav.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="{{ route ('index') }}">
                                    <img src="{{ asset('img/logo-fix.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route ('index') }}">home</a></li>
                                        <li><a href="#">About <i class="fas fa-sort-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="https://www.amnesty.org/en/who-we-are/" target="_blank">Amnesty International</a></li>
                                                <li><a href="https://amnestynepal.org/amnesty-international-nepal/" target="_blank">Amnesty International Nepal</a></li>
                                                <li><a href="{{ route ('about-us') }}">Banepa Youth Network</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Campaign <i class="fas fa-sort-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="https://amnestynepal.org/our-activities/" target="_blank">Amnesty International Nepal Activities</a></li>
                                                <li><a href="https://www.amnesty.org/en/get-involved/take-action/" target="_blank">International Campaign</a></li>
                                                <li><a href="https://amnestynepal.org/campaign-materials/" target="_blank">Campaign Materials</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="activities.php">Our Activities</a></li>
                                        <li><a href="https://amnestynepal.org/category/appeal-for-action/" target="_blank">Appeal for Action</a></li>
                                        <li><a href="{{ route ('join-us') }}">Join Us</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content')

<!-- footer_start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Join With Us
                        </h3>
                        <ul>
                            <li><a href="joinus.php">Join Us</a></li>
                            <li><a href="https://academy.amnesty.org/learn" target="_blank">Online Academy</a></li>
                            <li><a href="{{ route ('admin.home') }}" target="_blank">Member Login</a></li>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text">Banepa 13, Tindobato<br>
                                Kavre, State 3 <br>
                                9861723432 / 9860145986 <br>
                                <a class="domain" href="#">contact@aibyn.org</a></p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/ai.banepa" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Quick Navigation
                                </h3>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="Joinus.php">Get Membership</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    AI Nepal Section
                                </h3>
                                <ul>
                                    <li><a href="https://amnestynepal.org/amnesty-international-nepal/national-board/">National Board</a></li>
                                    <li><a href="https://amnestynepal.org/publications/">Publications</a></li>
                                    <li><a href="https://amnestynepal.org/our-activities/">Activities</a></li>
                                    <li><a href="https://amnestynepal.org/campaign-materials/">Campaign Materials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <div style="float: left;">
                                    <small> Copyright &copy; 2020 - <script>document.write(new Date().getFullYear());</script> Banepa Youth Network </small>
                                </div>
                                    <div style="float: right;"> <small> Developed by  <a href="" target="_blank">Tech Lab </a> </small>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer_ends -->


            <!-- jQuery -->
            {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

            <!-- Bootstrap -->
            {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}

            {{-- Nav --}}
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

            <!-- JS here -->
            <script src="{{ asset('/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/popper.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/ajax-form.js') }}"></script>
            <script src="{{ asset('/frontend/js/waypoints.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/jquery.counterup.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/scrollIt.js') }}"></script>
            <script src="{{ asset('/frontend/js/jquery.scrollUp.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/wow.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/nice-select.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/jquery.slicknav.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ asset('/frontend/js/plugins.js') }}js/plugins.js"></script>

            <!--contact js-->
            {{-- <script src="js/contact.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.form.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/mail-script.js"></script>

            <script src="js/main.js"></script> --}}

        </body>

        </html>
