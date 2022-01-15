<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Eventify - Event and Conference Template</title>

    <!--======AuthForms =====-->


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area navbar-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#event">Schedules</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#gallery">Gallery</a>
                                    </li>
                                    
                                    @auth
                                    <li class="nav-item" style="margin-left: 80px">
                                        <a class="page-scroll" ><span>Welcome, {{ Auth::user()->username }}</span></a>

                                        
                                    </li>

                                    <li class="nav-item" style="margin-left: 80px">
                                        <a class="page-scroll" href="/logout" >Logout</a>
                                    </li>
                                    @endauth
                                   

                                   

                                    @guest

                                    <li class="nav-item" style="margin-left: 80px">
                                        <a class="page-scroll" href="/login">Login</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="page-scroll" href="/register">Register</a>
                                    </li>

                                    @endguest
                                </ul>
                            </div>
                              
                           @if (auth()->user())
                               
                           @else
                           <div class="navbar-btn d-none d-sm-inline-block" style="margin-right: 100px">
                            <a class="main-btn" href="{{ route('login') }}">Get a Ticket</a>
                            </div>
                           @endif
                           
                           
                           
                           
                            
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

       

    <!--====== HEADER PART ENDS ======-->

    @yield('content')
    <!--====== ABOUT PART START ======-->

    
    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer.jpg)">
        <div class="footer-subscribe-area pt-120 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-subscribe text-center">
                            <h2 class="subscribe-title">Subscribe Now</h2>
                            <div class="subscribe-form mt-45">
                                <form action="#">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button class="main-btn">Subscribe Now</button>
                                </form>
                            </div>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer subscribe -->
        
        <div class="footer-widget">
            <div class="container">
                <div class="widget  pt-80 pb-130">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-address mt-40">
                                <h5 class="f-title">Venue Location</h5>
                                <p class="text">18 - 21 DECEMBER, 2022 <br> 51 Francis Street, Cesare Rosaroll, 118 80139 Eventine</p>
                                <a class="contact-link" href="#">Contact Our Authority</a>
                            </div> <!-- footer address -->
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-contact mt-40">
                                <h5 class="f-title">Social Connection</h5>
                                <p class="text">Don't miss a thing! Receive daily news You should connect social area for Any Proper Updates Anytime</p>
                                <ul class="social">
                                    <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- widget -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p class="text">Template Designed and Developed by <a href="https://graygrids.com/" rel="nofollow">GrayGrids</a>. All Rights Reserved by Us</p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======--> 

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!-- row -->










    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Countdown js ======-->
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
