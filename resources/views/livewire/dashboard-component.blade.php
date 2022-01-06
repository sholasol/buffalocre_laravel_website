<div>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('asset/slider3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Dashboard</h2>
                    </div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="/">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!-- Start Service Details Area -->
<section class="service-details-area" style="margin-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 order-box-2">
                <div class="service-details-sidebar">
                    <!--Start Single Sidebar-->
                    <div class="single-sidebar-box">
                        <div class="services-page-link">
                            <ul>
                                <li class="active"><a href="{{ route('admin.dashboard')}}">Dashboard<span class="flaticon-enter"></span></a></li>
                                <li><a href="{{ route('admin.product-categories')}}">Product Categories<span class="flaticon-enter"></span></a></li>
                                <li><a href="{{ route('admin.create-blog')}}">Create Blog<span class="flaticon-enter"></span></a></li>
                                <li><a href="{{ route('admin.create-product')}}">Create Product<span class="flaticon-enter"></span></a></li>
                                <li><a href="">Orders<span class="flaticon-enter"></span></a></li>
                                <li><a href="">Product Supply<span class="flaticon-enter"></span></a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout<span class="flaticon-enter"></span></a></li>
                                <form id="logout-form" method="post" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                    <!--End Single Sidebar-->

                </div>
            </div>

            <div class="col-xl-8 col-lg-7 order-box-1">
                <div class="service-details-content">




                    <div class="service-details_main_content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <span class="border-box"></span>
                                <h5>Product</h5>
                            </div>
                            <h2>Products List</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top_text">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Image</th>
                                          <th scope="col">Product</th>
                                          <th scope="col">Description</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($prods as $key=> $prod)
                                          <tr>
                                            <th scope="row">{{$key + 1}}</th>
                                            <td>
                                                <img src="{{asset('asset/image/products')}}/{{$prod->image}}" alt="{{$prod->name}}" height="50" width="50" alt="">

                                            </td>
                                            <td>{{$prod->name}}</td>
                                            <td>{!! Str::limit($prod->description, 150) !!}</td>
                                            <td>
                                                <a href="{{route('admin.product-edit', ['prod_id'=>$prod->id])}}">
                                                    <i class="fa fa-edit text-primary"></i>
                                                </a>
                                            </td>
                                          </tr>
                                          @endforeach

                                      </tbody>
                                </table>
                                {{$prods->links()}}
                            </div>
                        </div>
                    </div>


                    <div class="service-details_main_content" style="margin-top: 20px !important;">
                        <div class="sec-title">
                            <div class="sub-title">
                                <span class="border-box"></span>
                                <h5>Blogs</h5>
                            </div>
                            <h2>All Blog</h2>
                        </div>
                        <div class="inner-content">
                            <div class="top_text">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Image</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Content</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($blogs as $key=> $blog)
                                          <tr>
                                            <th scope="row">{{$key + 1}}</th>
                                            <td>
                                                <img src="{{asset('asset/image/blogs')}}/{{$blog->image}}" alt="{{$blog->title}}" height="50" width="50" alt="">

                                            </td>
                                            <td>{{$blog->title}}</td>
                                            <td>{!! Str::limit($blog->content, 150) !!}</td>
                                            <td>
                                                <a href="{{route('admin.blog-edit', ['blog_id'=>$blog->id])}}">
                                                    <i class="fa fa-edit text-primary"></i>
                                                </a>
                                                {{-- <a onclick="confirm('Are you sure, you want to delete this blog?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $blog->id }})" >
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a> --}}
                                            </td>
                                          </tr>
                                          @endforeach

                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="service-details_content_two">
                        <h3>Why Choose Erdunt Industries</h3>
                        <p>Incididunt ut labore dolore magna aliqua eni ipsum dnim veniam, quis nostrud exercitation dolor ullamco
                        laboris nisi ut aliquip exa comaody consequat duis aute irure dolor reprehend.</p>
                        <div class="inner_content">
                            <ul>
                                <li>
                                    <div class="single_box">
                                        <div class="icon">
                                            <div class="inner">
                                                <span class="icon-icon-27 clr1"></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3>Company Unit</h3>
                                            <p>Incididunt labore sad temp magna dui ecitationy dolor ullamco.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_box">
                                        <div class="icon">
                                            <div class="inner">
                                                <span class="icon-icon-5 clr1"></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3>Gas Production</h3>
                                            <p>Incididunt labore sad temp magna dui ecitationy dolor ullamco.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <div class="single_box">
                                        <div class="icon">
                                            <div class="inner">
                                                <span class="icon-icon-6 clr1"></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3>Research Center</h3>
                                            <p>Incididunt labore sad temp magna dui ecitationy dolor ullamco.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_box">
                                        <div class="icon">
                                            <div class="inner">
                                                <span class="icon-icon-16 clr1"></span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h3>Our Regulations</h3>
                                            <p>Incididunt labore sad temp magna dui ecitationy dolor ullamco.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="service-details_content_three">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="img-holder">
                                    <img src="assets/images/services/service-details-v3-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="text-holder">
                                    <h3>How We Can Help</h3>
                                    <p>Incididunt ut laboret dolore magna aliqua. At enim
                                        trud exercitation dolor ullamco laboris nisut aliquip
                                        aute irure dolor in reprehenderit.
                                    </p>
                                    <ul>
                                        <li>
                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Leading industrial solutions with machinery
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Voluptatem acusantium doloremque laudant
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Periam sed eafy que ipsa quae ab illoy invenre
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Geriam eaque ipsa quae ab illo inventore
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Quasi architecto beatae vitae dicta suntsu
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Service Details Area -->




</div>
