@extends('frontend.layout.master')
  @section('content')
      <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper ">
          @foreach($sliders as $slider)
          <div class="swiper-slide" data-slide-bg="{{$slider->image}}">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">{{$slider->title}}</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">{!! $slider->description !!}</h4>
                @if($slider->btn_text!=null)
                <a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="{{$slider->btn_link}}">{{$slider->btn_text}}</a>
                @endif
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="swiper-slide" data-slide-bg="{{asset('')}}frontend/images/slider-1-slide-2-1920x671.jpg">
            <div class="container">
              <div class="swiper-slide-caption">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Easy Bets</h1>
                <h4 data-caption-animate="fadeInUp" data-caption-delay="200">With the lowest commissions</h4><a class="button button-gray-outline" data-caption-animate="fadeInUp" data-caption-delay="300" href="#">Join Us</a>
              </div>
            </div>
          </div> -->
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </section>
      <section class="section section-sm bg-gray-100" style="padding: 45px 0;">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12"style="padding-right: 3px !important; padding-left: 3px !important;">
             @php $setting=setting(); @endphp
              <!-- Post Miranda-->
              <article class="post-miranda">
                <a href="{{$setting->sub_bannar_link}}" target="_blank">
                  <img src="{{$setting->sub_bannar}}" alt="" width="100%" height="397"/>
                </a>
                <!-- <div class="post-miranda-content"> -->
                
                <!-- </div> -->
                
              </article>

            </div>
            
          </div>
        </div>
      </section>
      <section class="section section-sm bg-gray-100" style="padding-bottom: 45px">
        <div class="container">
          <div class="row row-30">
            @foreach($link_pins->slice(0,1) as $link)
            <div class="col-lg-6 right"style="min-height:180px;padding-right: 3px !important; padding-left: 3px !important;">
              <article class="banner context-dark">
                <a href="{{$link->btn_link}}">
                  <div class="banner-inner">
                    <div class="banner-image"><img src="{{$link->image}}" alt="" width="769" height="366"/>
                    </div>
                    <div class="banner-body">
                      <div class="banner-content">
                        <h3 class="banner-title"><a href="{{$link->btn_link}}">{{$link->title}}</a></h3>
                        <a href="{{$link->btn_link}}"style="color:white"><p class="banner-text ">{{$link->description}}</p></a>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            @endforeach
            @foreach($links as $id=>$link)
            @if($id>4)
            @php break; @endphp
            @endif

            <div class="col-lg-3 {{($id==1)?'':'right'}}"style="padding-right: 3px !important; padding-left: 3px !important;" >
              <article class="banner context-dark" style="min-height:240px;">
                <a href="{{$link->btn_link}}">
                  <div class="banner-inner">
                    <div class="banner-image"><img src="{{$link->image}}" alt="" width="370" height="366"/>
                    </div>
                    <div class="banner-body">
                      <div class="banner-content">
                        <h4 class="banner-title"><a href="{{$link->btn_link}}"> {{$link->title}}</a></h4>
                        <a href="{{$link->btn_link}}"style="color:white"><p class="banner-text">{{$link->description}}</p></a>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            @endforeach
            <!-- <div class="col-lg-3">
              <article class="banner context-dark">
                <div class="banner-inner">
                  <div class="banner-image"><img src="{{asset('')}}frontend/images/promotions-03-370x366.jpg" alt="" width="370" height="366"/>
                  </div>
                  <div class="banner-body">
                    <div class="banner-content">
                      <h4 class="banner-title"><a href="#"> profitable Betting</a></h4>
                      <p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad mini</p><a class="button button-gray-outline" href="#"> more info</a>
                    </div>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-lg-3">
              <article class="banner context-dark">
                <div class="banner-inner">
                  <div class="banner-image"><img src="{{asset('')}}frontend/images/promotions-03-370x366.jpg" alt="" width="370" height="366"/>
                  </div>
                  <div class="banner-body">
                    <div class="banner-content">
                      <h4 class="banner-title"><a href="#"> profitable Betting</a></h4>
                      <p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad mini</p><a class="button button-gray-outline" href="#"> more info</a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-3">
              <article class="banner context-dark">
                <div class="banner-inner">
                  <div class="banner-image"><img src="{{asset('')}}frontend/images/promotions-03-370x366.jpg" alt="" width="370" height="366"/>
                  </div>
                  <div class="banner-body">
                    <div class="banner-content">
                      <h4 class="banner-title"><a href="#"> profitable Betting</a></h4>
                      <p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad mini</p><a class="button button-gray-outline" href="#"> more info</a>
                    </div>
                  </div>
                </div>
              </article>
            </div> -->
            @foreach($link_pins->slice(1,2) as $link)
            <div class="col-lg-6"style="min-height:180px;padding-right: 3px !important; padding-left: 3px !important;">
              <article class="banner context-dark">
                <a href="{{$link->btn_link}}">
                  <div class="banner-inner">
                    <div class="banner-image"><img src="{{$link->image}}" alt="" width="769" height="366"/>
                    </div>
                    <div class="banner-body">
                      <div class="banner-content">
                        <h3 class="banner-title"><a href="{{$link->btn_link}}">{{$link->title}}</a></h3>
                        <a href="{{$link->btn_link}}"style="color:white"><p class="banner-text ">{{$link->description}}</p></a>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30 ">
            <div class="col-lg-8"style="padding-right: 3px !important; padding-left: 3px !important;">
              
              <!-- Heading Component-->
              <!-- <article class="heading-component">
                <div class="heading-component-inner">
                  <h5 class="heading-component-title">In The Spotlight
                  </h5>
                </div>
              </article> -->
              <!-- Post Miranda-->
              @foreach($blog_pins as $id=>$blog)
              @if($id>=2)
              @php break; @endphp
              @endif
              <article class="post-miranda blog">
                <div class="post-miranda-content">
                  <div class="post-miranda-main">
                    <div class="post-miranda-header">
                      
                     
                        <div class="badge badge-secondary">News
                        </div>
                   
                      <time class="post-miranda-time" datetime="2022">{{dateFormatconverter($blog->news_cdt)}}
                      </time>
                      <div class="post-miranda-view"><span class="">{{user($blog->user_id)}}</span>
                      </div>
                    </div>
                    <h4 class="post-miranda-title"><a href="{{route('home.newses',$blog->news_slug)}}">{{$blog->news_title}}</a></h4>
                    <div class="post-miranda-text">
                      <p>{!! Str::limit(strip_tags($blog->news_description),300) !!}</p>
                    </div>
                  </div>
                  <div class="post-miranda-aside"><a class="post-miranda-figure" href="{{route('home.newses',$blog->news_slug)}}"><img src="{{$blog->news_image}}" alt="" width="207" height="152"style="max-height:192px"/></a></div>
                </div>
                <div class="post-miranda-footer">
                  
                  <div class="post-miranda-share">
                    <ul class="group">
                      <li>Share</li>
                      <li><a class="icon icon-xs fa fa-facebook" href="{{$setting->facebook}}" target="_blank"></a></li>
                    <li><a class="icon icon-xs fa fa-twitter" target="_blank" href="{{$setting->twitter}}"></a></li>
                    <li><a class="icon icon-xs fa fa-google-plus" target="_blank" href="{{$setting->twich}}"></a></li>
                    <li><a class="icon icon-xs fa fa-instagram" target="_blank" href="{{$setting->instragram}}"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
              @endforeach
          
            </div>
            <div class="col-lg-4">
              <!-- Blog Aside-->
              <div class="block-aside">
                
                <div class="block-aside-item">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Övriga nyheter
                      </h5><a class="button button-xs button-gray-outline" href="{{route('home.news')}}">alla nyheter</a>
                    </div>
                  </article>

                  <!-- List Post Classic-->
                  <div class="list-post-classic">
                    <!-- Post Classic-->
                    @foreach($blogs as $id=>$blog)
                    @if($id>=6)
                    @php break; @endphp
                    @endif
                    <article class="post-classic">
                      <div class="post-classic-aside"><a class="post-classic-figure" href="{{route('home.newses',$blog->news_slug)}}"><img src="{{$blog->thumbnail}}" alt="" width="150" height="94"/></a></div>
                      <div class="post-classic-main">
                        <p class="post-classic-title"><a href="{{route('home.newses',$blog->news_slug)}}">{{$blog->news_title}}</a></p>
                        <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                          <time datetime="2022">{{dateFormatconverter($blog->news_cdt)}}</time>
                        </div>
                      </div>
                    </article>
                    @endforeach
                    <!-- Post Classic-->
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12 company-logos"style="padding-right: 3px !important; padding-left: 3px !important;">
              <article class="post-miranda ">
                   @foreach($clients as $client)
                <!-- <div class="post-miranda-content"> -->
                
                  <a href="{{$client->link}}"><img src="{{$client->image}}" alt="alibaba" class="logos1" width="200px" height="100px"></a>
                
                <!-- </div> -->
                @endforeach
              </article>

            </div>
            
          </div>
        </div>
      </section>
@endsection


      

      <!-- Page Footer-->
      
      
      <!-- PopUp Model -->
      <!-- <div class="modal modal-sport fade" id="sportModal" tabindex="-1" role="dialog" aria-labelledby="sportModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sportModalTitle">Placing a bet</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="modal-sport-wager-title"><span class="modal-sport-wager"></span> <span class="modal-sport-wager-count"></span>
              </p>
              <p class="modal-sport-confrontation"></p>
              <p class="modal-sport-live"><span class="modal-sport-live-count"></span> <span>1X2 Live Betting</span>
              </p>
              <div class="stepper-sport">
                <input class="form-input" type="number" data-zeros="true" value="0" min="0" max="100">
              </div>
            </div>
            <div class="modal-footer">
              <p class="modal-sport-bets"><span class="modal-sport-bets-left">Number of bets</span><span class="modal-sport-bets-right"></span></p>
              <p class="modal-sport-stake"><span class="modal-sport-stake-left">Stake</span><span class="modal-sport-stake-right">4</span></p>
              <p class="modal-sport-win"><span class="modal-sport-win-left">Winnings</span><span class="modal-sport-win-right">24</span></p>
              <button class="modal-sport-place button button-primary button-block" type="button" data-bs-dismiss="modal">place bet</button>
            </div>
          </div>
        </div>
      </div> -->
    
    
    <!-- Global Mailform Output-->
   