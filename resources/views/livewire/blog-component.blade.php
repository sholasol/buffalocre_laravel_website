<div>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('asset/slider3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Blog</h2>
                    </div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Blog </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Blog Style1 Area-->
<section class="blog-page-one">
    <div class="container">
        <div class="row text-right-rtl">
            @foreach ($blogs as $blog )
                <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{ asset('asset/image/blogs')}}/{{ $blog->image }}" alt="{{ $blog->title }}">
                            <div class="overlay-icon">
                                <a href="/blog"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>{{ $blog->created_at->diffForHumans()}}</h2>
                            {{-- <span>DEC</span> --}}
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Buffalocrete Admin</a></li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="/blog">{{ $blog->title }}</a>
                        </h3>
                        <div class="text">
                            <p>{{Str::limit($blog->content, 150) }}</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            @endforeach
            {{-- <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-1.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">The Industrial Sector To Maintain Growth</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-2.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">Contribution World GDP By Erdunt Is 20%</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-3.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">Reliant Manufacturing By Continued Business</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->

            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-4.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">The Industrial Sector To Maintain Growth</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-5.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">Contribution World GDP By Erdunt Is 20%</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-6.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">Reliant Manufacturing By Continued Business</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->

            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-7.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">The Industrial Sector To Maintain Growth</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-8.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">Contribution World GDP By Erdunt Is 20%</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/blog/blog-v5-9.jpg" alt="">
                            <div class="overlay-icon">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                        <div class="date-box bgclr1">
                            <h2>25</h2>
                            <span>DEC</span>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Admin</a></li>
                            <li><i class="fa fa-comment-o" aria-hidden="true"></i>50 Comments</li>
                        </ul>
                        <h3 class="blog-title">
                            <a href="blog-single.html">Reliant Manufacturing By Continued Business</a>
                        </h3>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing sed.</p>
                        </div>
                        <div class="readmore-button">
                            <a href="#"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1--> --}}

        </div>

        {{-- <div class="row">
            <div class="col-xl-12">
                <ul class="styled-pagination pdtop0 text-center clearfix">
                    <li class="prev"><a href="#"><i class="fa fa-angle-left left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#"><i class="fa fa-angle-right right"></i></a></li>
                </ul>
            </div>
        </div> --}}

    </div>
</section>
<!--End Blog Style1 Area-->


<!--Start Subscribe Area-->
<section class="subscribe-area gray-bg">
    <div class="subscribe-bg banner-animate" style="background-image: url(assets/images/shape/subscribe-area-bg.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="subscribe-content-box wow slideInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="left">
                        <div class="icon">
                            <span class="flaticon-envelope-1"></span>
                        </div><!-- /.icon -->
                        <div class="subscribe-title">
                            <h2>Subscribe Newsletter</h2>
                            <p>At Erdunt, our goal is to generate production by experts</p>
                        </div>
                    </div><!-- /.left -->
                    <div class="subscribe-box">
                        <form class="subscribe-form" action="#">
                            <input type="email" name="email" placeholder="Email address ...">
                            <button class="btn-one" type="submit"><span class="txt">Subscribe <i class="right flaticon-login"></i></span></button>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-xl-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!--End Subscribe Area-->
</div>
