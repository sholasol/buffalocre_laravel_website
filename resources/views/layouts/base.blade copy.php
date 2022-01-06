<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buffalocrete || Construct</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">	
	<link rel="stylesheet" href="{{ asset('assets/css/imp.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom-animate.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/hiddenbar.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css')}}">
   
    <link rel="stylesheet" href="{{ asset('assets/css/color.css')}}">
    <link href="{{ asset('assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
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
{{-- <div class="loader-wrap">
    <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
    <div class="layer layer-one"><span class="overlay"></span></div>
    <div class="layer layer-two"><span class="overlay"></span></div>        
    <div class="layer layer-three"><span class="overlay"></span></div>        
</div> --}}

<!-- page-direction -->
<div class="page_direction">
    <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
    <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
</div>
<!-- page-direction end -->


<!-- switcher menu -->
<div class="switcher">
    <div class="switch_btn">
        <button><img src="{{ asset('assets/images/icon/color-palette.png')}}" alt="Color Palette"> </button>
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
<header class="main-header header-style-four">
    <!--Start Header Top-->  
    <div class="header-top-style4">
        <div class="container">
            <div class="outer-box clearfix">
               
                <div class="header-top-style4_left pull-left">
                    <div class="header-contact-info3">
                        <ul>
                            <li><span class="flaticon-incoming-call"></span><a href="tel:123456789">+2348 000 0000 000</a></li>
                            <li><span class="flaticon-envelope-1"></span><a href="mailto:info@buffalocrete.com">info@buffalocrete.com</a></li>
                            <li><span class="flaticon-clock-1"></span>Mon to Fri : 9am to 6pm</li>
                        </ul>
                    </div>    
                </div>
                
                <div class="header-top-style4_right pull-right">
                    <div class="header-social-link-1 header-social-link-4">
                        <div class="social-link">
                            <ul class="clearfix">
                                <li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://youtube.com" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>    
                    </div>      
                </div>
                  
            </div>    
        </div>   
    </div>
    <!--End Header Top--> 
     
    <!--Start Header--> 
    <div class="header-style4">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-style4_left pull-left">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('assets/images/resources/logo.png')}}" alt="Awesome Logo" title=""></a>
                    </div>
                </div>

                <div class="header-style4_right pull-right">
                
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style4 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current">
                                        <a class="home" href="/">
                                            <span class="home_text">Home</span>
                                            <span class="flaticon-home home_icon"></span>
                                        </a>
                                    </li>
                                    <li><a href="about">About us</a> </li>
                                    <li><a href="/shop">Shop</a> </li>
                                    <li><a href="/services">Services</a> </li>
                                    <li><a href="/blog">Blog</a> </li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div>
                    
                    <div class="outer-search-box-style1 outer-search-box-style4">
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
                    <div class="header-style4_right__btn">
                        <a class="btn-one" href="#"><span class="txt"><i class="left flaticon-login"></i>Get a quote</span></a>
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
                    <a href="index.html" class="img-responsive"><img src="{{ asset('assets/images/resources/logo.png')}}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu style4 clearfix">
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
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/resources/mobilemenu-logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://facebook.com" target="_blank"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="https://twitter.com" target="_blank"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="https://google.com" target="_blank"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="https://youtube.com" target="_blank"><span class="fab fa fa-youtube-square"></span></a></li>
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
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-1.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-1.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-2.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-2.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-3.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-3.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-4.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-4.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-5.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-5.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-6.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-6.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-7.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-7.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-8.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-8.jpg')}}">
                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/footer/wid-recent-project-9.jpg')}}" alt="">
                                    <div class="overlay-content">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{ asset('assets/images/footer/wid-recent-project-9.jpg')}}">
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
                        <p>&copy; {{ date('Y') }} <a href="/">Buffalocrete.</a> All rights reserved.</p>
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
                                <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                            </li>
                            <li>
                                <a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a> 
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






<script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/aos.js')}}"></script>
<script src="{{ asset('assets/js/appear.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/js/isotope.js')}}"></script>
<script src="{{ asset('assets/js/jquery.bxslider.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js')}}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.enllax.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/js/knob.js')}}"></script>
<script src="{{ asset('assets/js/map-script.js')}}"></script>
<script src="{{ asset('assets/js/owl.js')}}"></script>
<script src="{{ asset('assets/js/pagenav.js')}}"></script>
<script src="{{ asset('assets/js/parallax.min.js')}}"></script>
<script src="{{ asset('assets/js/scrollbar.js')}}"></script>
<script src="{{ asset('assets/js/slick.js')}}"></script>
<script src="{{ asset('assets/js/timePicker.js')}}"></script> 
<script src="{{ asset('assets/js/validation.js')}}"></script>
<script src="{{ asset('assets/js/wow.js')}}"></script> 
<script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>

<script src="{{ asset('assets/js/map-script.js')}}"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap">
</script>


<!-- thm custom script -->
<script src="{{ asset('assets/js/custom.js')}}"></script>


    @livewireScripts
    @stack('scripts')
</body>
</html>