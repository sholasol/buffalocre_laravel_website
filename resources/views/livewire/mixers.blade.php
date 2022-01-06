
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('asset/slider3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Products</h2>
                    </div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Mixers</li>
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

        <div class="row">
        @if ($prods->count() > 0)


            @foreach ($prods as $blog )
                 <!--Start Single blog Style1-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{ asset('asset/image/products')}}/{{ $blog->image }}" alt="{{ $blog->name }}">
                            <div class="overlay-icon">
                                <a href="{{route('details', ['prod_id'=>$blog->id])}}"><span class="flaticon-plus"></span></a>
                            </div>
                        </div>
                       {{-- <div class="date-box bgclr1">
                            <h2>{{ $blog->created_at->diffForHumans()}}</h2>
                        </div>--}}
                    </div>
                    <div class="text-holder">
                       {{-- <ul class="meta-info">
                            <li><i class="fa fa-user" aria-hidden="true"></i>By<a href="#">Buffalocrete Admin</a></li>
                        </ul>--}}
                        <h3 class="blog-title" style="font-size: 16px !important;">
                            <a href="{{route('details', ['prod_id'=>$blog->id])}}">{{ $blog->name }}</a>
                        </h3>
                        <div class="text">
                           <p>{!! Str::limit($blog->description, 250) !!}</p>
                        </div>
                        <div class="readmore-button">

                            <a href="{{route('details', ['prod_id'=>$blog->id])}}"><span class="fa fa-arrow-circle-o-right"></span>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single blog Style1-->
            @endforeach
            @else
            <p>No Content to display at this moment</p>
            @endif

        </div>

    </div>
</section>
<!--End Blog Style1 Area-->
{{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> --}}
