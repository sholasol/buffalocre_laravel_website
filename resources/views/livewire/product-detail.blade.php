<div>
<style>
    p {
    margin: 12px 0px;
    text-align: justify;
    font-stretch: normal;
    font-size: 17px !important;
    line-height: normal;
    font-family: Arial;
}
</style>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('asset/slider3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                           <h2>Product Detail</h2>
                        </div>
                        <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <ul class="clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">{{$product->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Blog Details Area-->
<section class="blog-details-area">
    <div class="container">
        <div class="row text-right-rtl">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-posts blog-details_content">

                    <div class="single-blog-style2 blog_list wow fadeInUp" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('asset/image/products')}}/{{ $product->image }}" style="width: 500px !important; height:500px !important;" alt="">
                            </div>
                            <div class="date-box bgclr1">
                                <h2>
                                    <i class="fa fa-archive"></i>
                                </h2>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h2 class="blog-title">
                                {{ $product->name }}
                            </h2>
                            <div class="text">
                                <p style="font-size: 14px !important;">
                                    {!! $product->description !!}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--Start sidebar Wrapper-->
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar  wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <div class="title">
                            <h3>Other Products</h3>
                        </div>
                        <ul class="recent-posts">
                            @foreach ($prods as $prod)
                            <li>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('asset/image/products')}}/{{ $prod->image }}" alt="{{$prod->name}}">
                                        <div class="overlay-content">
                                            <a href="{{route('details', ['prod_id'=>$prod->id])}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="title-box">
                                        <p>
                                            {!! Str::limit($prod->description, 200) !!}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <div class="title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="popular-tag">
                            @foreach ($cats as $cat)
                            <li><a >{{$cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->





                </div>
            </div>
            <!--End sidebar Wrapper-->

        </div>

    </div>
</section>
<!--End Blog Details Area-->
</div>
