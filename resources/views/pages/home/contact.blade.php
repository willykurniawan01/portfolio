@extends('layouts.home')

@section('title','Contact')

@section('content')
  
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('home/img/1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Area Start -->
    <div class="contact-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h2 class="contact-title mb-30">Let’s Work <br>Together</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Email</p>
                        <a href="mailto:info.deercreative@gmail.com">willykurniawan50@gmail.com</a>
                    </div>
                    <!-- Contact Info -->
                    <div class="contact-info mb-30">
                        <p>Call</p>
                        <a href="#">0895630011329</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

   

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
                        <span>willy kurniawan</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy kurniawan</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy kurniawan</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy kurniawan</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy kurniawan</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>willy kurniawan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->

@endsection