@extends('layouts.home')

@section('title','Home')

@section('content')
      <!-- Welcome Area Start -->
      <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->

        @foreach ($items as $item)
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{Storage::url($item->picture)}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms">{{$item->greeting}}</h2>
                            <p data-animation="bounceInDown" data-delay="500ms">{!!$item->description!!}</p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get CV</a>
                                    <a class="hero-mail-contact"
                                        href="mailto:willykurniawan50@gmail.com">willykurniawan50@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">

                @foreach ($gallery as $item)
                    
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <img src="{{Storage::url($item->picture)}}" alt="">
                        <div class="hover-content">
                            <a href="{{Storage::url($item->picture)}}" class="portfolio-img">+</a>
                        </div>
                    </div>
                </div>

                @endforeach
               
            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                <a href="{{route('home-gallery')}}" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>@Willy_kurniawann</p>
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
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Willy_kurniawann</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Area End -->
@endsection
    