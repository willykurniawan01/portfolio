@extends('layouts.home')

@section('title','Blog')
    
@section('content')
   
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area blog bg-img bg-overlay jarallax" style="background-image: url({{Storage::url($item->picture)}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <a href="#" class="btn post-catagory"></a>
                        <h2 class="page-title">{{$item->title}}</h2>
                        <div class="post-meta">
                            <a href="#" class="post-author">By Willy kurniawan</a>
                            <a href="#" class="post-date">{{$item->created_at}}</a>
                            <a href="#" class="post-comments">No Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Details Area Start -->
    <div class="alime--blog-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                      <p>
                          {!!$item->post!!}
                      </p>
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area mt-50 d-flex align-items-center justify-content-between">
                        <ul class="popular-tags">
                            <li><a class="btn badges-btn" href="#">CAMERA</a></li>
                            <li><a class="btn badges-btn" href="#">PHOTOGRAHY</a></li>
                            <li><a class="btn badges-btn" href="#">TIPS</a></li>
                        </ul>

                        <!-- Share Info -->
                        <div class="post-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Area End -->

   
    <!-- Related News Area Start -->
    <div class="related-news-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Recommended For You</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($post as $item)
                    
                <!-- Single Blog Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-post-area">
                        <!-- Post Thumbnail -->
                        <a href="#" class="post-thumbnail"><img src="{{Storage::url($item->picture)}}" alt=""></a>
                        <!-- Post Catagory -->
                        <a href="#" class="btn post-catagory">Camera</a>
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

            <div class="border-top mt-5"></div>
        </div>
    </div>
    <!-- Related News Area End -->

   
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