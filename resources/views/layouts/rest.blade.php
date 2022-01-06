<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buffalocrete || Construct</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<link rel="stylesheet" href="{{ asset('assets/css/aos.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css.css')}}">	
	<link rel="stylesheet" href="{{ asset('assets/css/imp.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/hiddenbar.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css.css')}}">
   
    <link rel="stylesheet" href="{{ asset('assets/css/color.css.css')}}">
    <link href="{{ asset('assets/css/color/theme-color.css.css')}}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-16x16.png')}}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    @livewireStyles
</head>

<body>

<div class="boxed_wrapper ltr">

<!-- Preloader -->
<div class="loader-wrap">
    <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
    <div class="layer layer-one"><span class="overlay"></span></div>
    <div class="layer layer-two"><span class="overlay"></span></div>        
    <div class="layer layer-three"><span class="overlay"></span></div>        
</div>

<!-- page-direction -->
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>
<!-- page-direction end -->


<!-- switcher menu -->
<div class="switcher">
    <div class="switch_btn">
        <button><img src="{{ asset('assets/images/icon/color-palette.png.css')}}" alt="Color Palette"> </button>
    </div>
    <div class="switch_menu">
        <!-- color changer -->
        <div class="switcher_container">
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end switcher menu --> 


<!-- Main header-->
<header class="main-header header-style-one">

    <!--Start Header Top-->  
    <div class="header-top">
        <div class="container">
            <div class="outer-box clearfix">
               
                <div class="header-top-left pull-left">
                    <div class="global-site-select-box">
                        <div class="input-box"> 
                            <select class="selectpicker" data-width="100%">
                                <option selected="selected">Global Site</option>
                                <option>Global Site 01</option>
                                <option>Global Site 02</option>
                                <option>Global Site 03</option>
                                <option>Global Site 04</option>
                            </select>  
                        </div>
                    </div>
                    <div class="text">
                        <p>Revolutionary Products For Industrial Engineering</p>
                    </div>
                </div>
                
                <div class="header-top-right pull-right">
                    <div class="header-menu-1">
                        <ul>
                            <li><a href="#">Investors</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>  
                    </div>
                    <div class="header-social-link-1">
                        <div class="social-link">
                            <ul class="clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>    
                    </div>      
                </div>
                  
            </div>    
        </div>   
    </div>
    <!--End Header Top--> 
     
    <!--Start Header--> 
    <div class="header">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-left clearfix pull-left">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('assets/images/resources/logo.png.css')}}" alt="Awesome Logo" title=""></a>
                    </div>
                </div>
                <div class="header-right pull-right">
                    <div class="header-contact-info clearfix">
                        <ul class="clearfix">
                            <li>
                                <div class="icon">
                                    <span class="flaticon-incoming-call clr1"></span>
                                </div>
                                <div class="text">
                                    <p>Call Us Today</p>
                                    <h4><a href="tel:123456789">(934) 256 7850</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-clock-1 clr1"></span>
                                </div>
                                <div class="text">
                                    <p>Working Hours</p>
                                    <h4>Mon - Fri: 9 am to 6 pm</h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-placeholder clr1"></span>
                                </div>
                                <div class="text">
                                    <p>950  Zalpaca  Avenue</p>
                                    <h4>Virginia, 32809</h4>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div> 
            </div>
        </div>    
    </div> 
    <!--End header-->

    <!--Start Header--> 
    <div class="header-bottom">
        <div class="container">
            <div class="outer-box clearfix">

                <div class="header-bottom_left pull-left">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown">
                                        <a class="home" href="#">
                                            <span class="home_text">Home</span>
                                            <span class="flaticon-home home_icon"></span>
                                        </a>
                                        <ul>
                                            <li><a href="index.html">Home Factory</a></li>
                                            <li><a href="index-2.html">Home Industry</a></li>
                                            <li><a href="index-3.html">Home Construction</a></li>
                                            <li><a href="index-4.html">Home Renewable Energy</a></li>
                                            <li><a href="index-5.html">Home OilGas</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                    <li><a href="index-5.html">Header Style Five</a></li>
                                                </ul>    
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown current"><a href="#">About us</a>
                                        <ul>
                                            <li><a href="about.html">About Factory</a></li>
                                            <li><a href="about-2.html">About Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="services-v1.html">Services Style One</a></li>
                                            <li><a href="services-v2.html">Services Style Two</a></li>
                                            <li><a href="services-v3.html">Services Style Three</a></li>
                                            <li><a href="services-detail-v1.html">Oil & Gas Engineering</a></li>
                                            <li><a href="services-detail-v2.html">Power & Energy</a></li>
                                            <li><a href="services-detail-v3.html">Industrial Exploration</a></li>
                                            <li><a href="services-detail-v4.html">Automation Industry</a></li>
                                            <li><a href="services-detail-v5.html">Manufacturing Plants</a></li>
                                            <li><a href="services-detail-v6.html">Chemical Research</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="error.html">404 Error page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="blog.html">News Grid View</a></li>
                                            <li><a href="blog-v2.html">News List View</a></li>
                                            <li><a href="blog-single.html">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div>  
                </div>
                
                <div class="header-bottom_right pull-right">
                    <div class="outer-search-box-style1">
                        <div class="seach-toggle"><span class="flaticon-magnifiying-glass"></span></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required="">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="header-bottom_right__btn">
                        <a class="btn-one" href="#"><span class="txt"><i class="left flaticon-login"></i>Get an Estimate</span></a>
                    </div>  
                </div> 
                
            </div>
        </div>    
    </div> 
    <!--End header-->


    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index.html" class="img-responsive"><img src="{{ asset('assets/images/resources/sticky-logo.png.css')}}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>   
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/resources/mobilemenu-logo.png.css')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu --> 

</header>







{{ $slot }}








<!--Start footer area -->  
<footer class="footer-style4-area">
    <div class="footer-style4">
        <div class="container">
            <div class="row text-right-rtl">
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget single-footer-widget-2 marbtm">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('assets/images/footer/footer-logo-4.png')}}" alt="Footer Logo" title="Logo"></a>   
                            </div>
                            <div class="text-box">
                                <p>Significantly pushed und the frugal lemur one and meretricious lucrative inside before swept magnificently expand our Industries via. Lorem ipsum dolor sit amet adipscing.</p>
                            </div>
                            <div class="footer_consultation_box">
                                <div class="icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <div class="text">
                                    <div class="top">
                                        <p>Need a Consultation?</p>
                                    </div>
                                    <a href="tel:123456789">(934) 256 7850</a>
                                </div>
                            </div>
                            
                        </div>     
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget single-footer-widget-2 margin_left_30 width250 marbtm">
                        <div class="title">
                            <h3>Our Industry</h3>
                        </div>
                        <ul class="footer-widget-links2">
                            <li><a href="#">Oil & Gas Engineering</a></li>    
                            <li><a href="#">Chemical Research</a></li>    
                            <li><a href="#">Industrial Equipments</a></li>    
                            <li><a href="#">Building & Construction</a></li>    
                            <li><a href="#">Energy Production</a></li>                       
                            <li><a href="#">Agricultural Sectors</a></li>                       
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget single-footer-widget-2 margin_left_80 width180">
                        <div class="title">
                            <h3>About Erdunt</h3>
                        </div>
                        <ul class="footer-widget-links2">
                            <li><a href="#">Company Information</a></li>    
                            <li><a href="#">Chain Of Factories</a></li>    
                            <li><a href="#">Our Workforce</a></li>    
                            <li><a href="#">Site Map</a></li>    
                            <li><a href="#">Project Opportunities</a></li>                       
                            <li><a href="#">Approach & History</a></li>                                            
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget single-footer-widget-2 float-right-box pdtop">
                        <div class="title">
                            <h3>Recent Projects</h3>
                        </div>
                        <ul class="recent-projects">
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-1.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-1.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-2.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-2.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-3.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-3.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-4.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-4.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-5.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-5.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-6.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-6.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-7.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-7.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-8.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-8.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-9.jpg.css')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="assets/images/footer/wid-recent-project-9.jpg.css')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                
            </div>
        </div>
    </div>

    <!--Start Footer Bottom-->
    <div class="footer-bottom-style4">
        <div class="container">
            <div class="outer_box">
                <div class="footer-bottom_left_box">
                    <div class="copyright-text copyright-text-style4">
                        <p>&copy; 2021 <a href="#">Erdunt.</a> All rights reserved.</p>
                    </div>
                    <div class="footer-menu-style1 footer-menu-style4">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>                                            
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom_right_box footer-bottom_right_box_style4">
                    <div class="footer-social-links">
                        <div class="inner_title">
                            <h3>Connect With Us</h3>
                        </div>
                        <ul class="social-links-style1 social-links-style2">
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Footer Bottom-->
</footer>   
<!--End footer area-->


<button class="scroll-top scroll-to-target bgclr1" data-target="html">
    <span class="fa fa-angle-up"></span>
</button> 

</div> 






<script src="{{ asset('assets/js/jquery.js.css')}}"></script>
<script src="{{ asset('assets/js/aos.js.css')}}"></script>
<script src="{{ asset('assets/js/appear.js.css')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js.css')}}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js.css')}}"></script>
<script src="{{ asset('assets/js/isotope.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.bxslider.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.enllax.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery.polyglot.language.switcher.js.css')}}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.min.js.css')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.js.css')}}"></script>
<script src="{{ asset('assets/js/knob.js.css')}}"></script>
<script src="{{ asset('assets/js/map-script.js.css')}}"></script>
<script src="{{ asset('assets/js/owl.js.css')}}"></script>
<script src="{{ asset('assets/js/pagenav.js.css')}}"></script>
<script src="{{ asset('assets/js/parallax.min.js.css')}}"></script>
<script src="{{ asset('assets/js/scrollbar.js.css')}}"></script>
<script src="{{ asset('assets/js/slick.js.css')}}"></script>
<script src="{{ asset('assets/js/timePicker.js.css')}}"></script> 
<script src="{{ asset('assets/js/validation.js.css')}}"></script>
<script src="{{ asset('assets/js/wow.js.css')}}"></script>
<script src="{{ asset('assets/js/TweenMax.min.js.css')}}"></script>


<!-- thm custom script -->
<script src="{{ asset('assets/js/custom.js.css')}}"></script>


@livewireScripts
@stack('scripts')
</body>
</html>