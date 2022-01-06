<div>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('asset/slider3.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Update Product</h2>
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
                        <h2>Edit Product </h2>
                    </div>
                    <div class="contact-form">
                        <form wire:submit.prevent="createProduct" id="contact-form" name="contact_form" class="default-form2" enctype="multipart/form-data"  method="post">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text"  placeholder="Product Name*" wire:model="name">
                                        @error('name')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text"  placeholder="Price" wire:model="price">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="file" name="image" wire:model="image">
                                        @error('image')<p class="text-danger">{{ $message }}</p> @enderror
                                        @if ($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                                        @else
                                            <img src="{{ asset('asset/image/products') }}/{{ $image }}" width="120" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    {{-- <div class="input-box" wire:ignore> --}}
                                    <div class="input-box"  wire:ignore>
                                        <textarea name="form_message" id="description" placeholder="Content...." wire:model="description"></textarea>
                                        @error('description')<p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="button-box text-center">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="txt"><i class="left flaticon-login"></i>Create Product</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Service Details Area -->


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
                        @this.set('description', d_data);
                    });
                }
            });
        });
    </script>
@endpush
