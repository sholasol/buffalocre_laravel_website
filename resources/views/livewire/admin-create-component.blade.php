<div>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('asset/slider3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Blogs</h2>
                    </div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="{{ route('admin.dashboard')}}">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!-- Start Service Details Area -->
<section class="service-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 order-box-2">
                <div class="service-details-sidebar">
                    <!--Start Single Sidebar-->
                    <div class="single-sidebar-box">
                        <div class="services-page-link">
                            <ul>
                                <li class="active"><a href="{{ route('admin.dashboard')}}">Dashboard<span class="flaticon-enter"></span></a></li>
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

                <div class="blog_form contact-style2_form">
                    <div class="title">
                        <h2>Create Blog</h2>
                    </div>
                    <div class="contact-form">
                        <form wire:submit.prevent="createBlog" id="contact-form" name="contact_form" class="default-form2" enctype="multipart/form-data"  method="post">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        {{-- wire:keyup="generateSlug" --}}
                                        <input type="text"  placeholder="Title*" wire:model="title">
                                        @error('title')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text"  placeholder="Slug*" wire:model="slug">
                                        @error('slug')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div> --}}
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="file" name="image" wire:model="image">
                                        @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120" alt="">
                                    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    {{-- <div class="input-box" wire:ignore> --}}
                                    <div class="input-box"  wire:ignore>
                                        <textarea name="form_message" id="description" placeholder="Content...." wire:model="content"></textarea>
                                        @error('content')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="button-box text-center">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="txt"><i class="left flaticon-login"></i>Save Blog</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="button-box text-center">
                            <a class="btn-one btn-block text-white">
                                <span class="txt"><i class="left flaticon-th"></i>All Blogs</span>
                            </a>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th></th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($blogs as $key=> $blog)
                                  <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td>
                                        <img src="{{asset('asset/image/blogs')}}/{{$blog->image}}" height="50" width="50" alt="">

                                    </td>
                                    <td>{{$blog->title}}</td>
                                    <td>{!! Str::limit($blog->content, 150) !!}</td>
                                    <td>
                                        <a href="{{route('admin.blog-edit', ['blog_id'=>$blog->id])}}">
                                            <i class="fa fa-edit text-primary"></i>
                                        </a>
                                        <a onclick="confirm('Are you sure, you want to delete this blog?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $blog->id }})" >
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                  </tr>
                                  @endforeach

                              </tbody>
                          </table>

                          {{ $blogs->links() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Service Details Area -->




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

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change',function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val(); //d_data is variable for description data
                        @this.set('content', d_data);
                    });
                }
            });
        });
    </script>
@endpush
