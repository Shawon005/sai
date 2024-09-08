@extends('frontend.layout.master')
  @section('content')
      
      <!-- Page Header-->
  <!-- <div class="swiper-slide" data-slide-bg="{{asset('')}}frontend/images/slider-1-slide-2-1920x671.jpg">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Easy Bets</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With the lowest commissions</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Join Us</a>
              </div>
            </div>
          </div> -->

      <!-- Swiper-->
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
      @php $setting=setting(); @endphp
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
              
              <!-- Post Miranda-->
              <article class="post-miranda">
                <!-- <div class="post-miranda-content"> -->
                <a href="{{$setting->sub_bannar_link}}">
                  <img src="{{$setting->sub_bannar}}" alt="" width="1170" height="397"/>
                </a>
                  
                <!-- </div> -->
                
              </article>

            </div>
            
          </div>
        </div>
      </section>
      <section class="section section-sm bg-gray-100 faq-section ">
        <div class="container ">
          <div class="card">
            <div class="row row-30" >
              <div class="col-lg-12 text-center">
                <h2 style="letter-spacing: 0"><span class="text-primary">FAQ</span></h2>
                <p class="faq"> <b>Vanliga frågor</b>
                  </p>
              </div>
            </div>
            <div class="row row-30" style="padding: 16px;">
              <div class="col-lg-8">
                <div class="accordion" id="accordionExample">
                  @foreach($faqs as $id=>$faq)
                  <div class="accordion-item " style="border:none;">
                    <h2 class="accordion-header" id="heading{{$id}}">
                      <button class="accordion-button faq-buttom" style="background-color: none !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$faq->question}}
                      </button>
                    </h2>
                    <div id="collapse{{$id}}" class="accordion-collapse collapse {{($id==0)?'show':''}}" aria-labelledby="heading{{$id}}" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      {!! $faq->answer !!}
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-4">
                <div class="faq-img">
                  <img class="brand-logo-light vertical-center" src="{{$setting->header_logo}}" alt="" width="210" height="41"/>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      
      
     

      

     @endsection