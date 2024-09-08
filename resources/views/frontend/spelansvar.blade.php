
@extends('frontend.layout.master')
  @section('content')     
      <!-- Page Header-->


      <!-- Swiper-->
      <!-- <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-1-1920x671.jpg">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Safe <br> Betting</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With 100% Risk-Free Guarantee</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Get started</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-2-1920x671.jpg">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Easy Bets</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With the lowest commissions</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Join Us</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </section> -->

      

      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
              <article class="banner banner-lg context-dark">
                <div class="banner-inner">
                  <div class="banner-image"><img src="{{$spela->page_banner}}" alt="" width="1170" height="397"/>
                  </div>
                  <div class="banner-body">
                    <div class="banner-content">
                      <h2 class="banner-title"><a href="{{$spela->text_link}}"> {!! $spela->banner_text !!}</a></h2>
                      @if($spela->btn_status)
                      </h2><a class="button button-gray-outline" href="{{$spela->text_link}}"> Sign up today</a>
                      @endif
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
            @php $setting=setting(); @endphp
              <!-- Post Miranda-->
              <article class="post-miranda">
                <!-- <div class="post-miranda-content"> -->
                <a href="{{$content->sub_bannar_link}}" target="_blank"> 
                  <img src="{{$content->sub_bannar}}" alt="" width="1170" height="397"/>
                </a>
                <!-- </div> -->
              </article>
            </div>
            
          </div>
        </div>
      </section>

      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
              <h3 class="text-center mb-4"><b>{{$spela->page_name}}</b></h3>
              <!-- Post Miranda-->
              <article class="">
                <!-- <div class="post-miranda-content"> -->
                  <div>
                    <p>{!! $spela->contain1 !!}
                    </p>
                  </div>
                  <div class="down-logo">
                    <img src="{{$spela->contain_image}}" alt="" width="1170" height="200"/>
                  </div>
                  <p>{!! $spela->contain2 !!}
                    </p>
                  </div>
                <!-- </div> -->
              </article>
            </div>
          </div>
        </div>
      </section>
 @endsection