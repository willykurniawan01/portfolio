@extends('layouts.home')

@section('title','Blog')
    
@section('content')
     <!-- Breadcrumb Area Start -->
     <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('home/img/1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Latest Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="alime-blog-area section-padding-80-0 mb-70">
        <div class="container">
            <div class="row">

                @foreach ($items as $item)

                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="{{Storage::url($item->picture)}}" alt=""></a>
                        <!-- Post Catagory -->
                        <a href="#" class="btn post-catagory">Photography</a>
                        <!-- Post Conetent -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{$item->created_at}}</a>
                                <a href="#">3 Comment</a>
                            </div>
                            <a href="#" class="post-title">{{$item->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Follow Area Start -->
    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>@willy_kurniawann</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy_kurniawann</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy_kurniawann</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy_kurniawann</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy_kurniawann</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy_kurniawann</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy_kurniawann</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->

@endsection