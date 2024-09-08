
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
                  <div class="banner-image"><img src="{{$content->page_banner}}" alt="" width="1170" height="397"/>
                  </div>
                  <div class="banner-body">
                    <div class="banner-content">
                      <h2 class="banner-title"><a href="{{$content->text_link}}"> {!! $content->banner_text !!}</a></h2>
                      @if($content->btn_status)
                      </h2><a class="button button-gray-outline" href="{{$content->text_link}}"> Sign up today</a>
                      @endif
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- @php $setting=setting(); @endphp
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-12">
              
             
              <article class="post-miranda">
              
                <a href="{{$setting->sub_bannar_link}}">
                  <img src="{{$setting->sub_bannar}}" alt="" width="1170" height="397"/>
                </a>
              
              </article>
            </div>
            
          </div>
        </div>
      </section> -->
      @php $setting=setting(); @endphp
      <section class="section section-sm bg-gray-100">
        <div class="container">
            <article class="post-miranda">
              <article class="post-classic">
                  <div class="row row-30">
                  <div class="col-lg-6">
                    <div class="post-classic-aside">
                        <img src="{{$setting->contact_image}}" alt="" width="1550" height="100"/>
                    </div>
                    
                  </div>
                  <div class="col-lg-6">
                    <div class="post-classic-main main-content">
                      <h3>{{$setting->contact_title}}</h3>
                      <div class="post-classic-title main-text">
                          {!! $setting->contact_details !!} <br><br>
                      </div>
                      <!-- <div class="post-classic-title full-text">
                        {!! $setting->contact_details !!} <br><br>
                      </div> -->
                      <!-- <div class="read-btn">
                        <a type="button" class="button-sm btn-primary read">Read More</a>
                      </div>
                      <div class="hide-btn">
                        <button type="button" class="button-sm btn-primary">Hide</button>
                      </div> -->
                    </div>
                  </div>
                  </div>
              </article>
            </article>
        </div>
      </section>
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
              
              <!-- Post Miranda-->
              <article class="">
                <!-- <div class="post-miranda-content"> -->
                  <div>
                    <p>{!! $content->contain1 !!}
                    </p>
                  </div>
                  @if($setting->contact_contain_image==1)
                  <div class="down-logo" >
                    <img src="{{$setting->header_logo}}" alt=""  width="1170" height="200" style="background-color:black"/>
                  </div>
                  @endif
                  <p>{!! $content->contain2 !!}
                    </p>
                  </div>
                <!-- </div> -->
              </article>
            </div>
          </div>
        </div>
      </section>
      
      



      

      <!-- Page Footer-->
    @endsection
    @section('js')
    <script>
       $(document).ready(function(){
        $('.full-text').hide();
        $('.hide-btn').hide();
        $('.read').on('click',function(){
          $('.main-text').hide();
          $('.full-text').show();
          $('.read-btn').hide();
          $('.hide-btn').show();
        });
        $('.hide-btn').on('click',function(){
          $('.main-text').show();
          $('.full-text').hide();
          $('.read-btn').show();
          $('.hide-btn').hide();
        });
       });
    </script>
    @endsection