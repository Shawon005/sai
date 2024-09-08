@extends('frontend.layout.master')
  @section('content')
  @php $setting=setting(); @endphp
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
                      </h2><a class="button button-gray-outline" href="{{$content->text_link}}"> Sign up today</a></h2>
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
            <div class="col-lg-4 text-center">
              
              <!-- Post Miranda-->
              <div class="circle-img">
                <!-- <div class="post-miranda-content"> -->
                  <img src="{{$tipspel->profile_image}}" alt="" width="300"  class="circle-img" />
                <!-- </div> -->
                
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card-details m-3">
                    <div class="card-body">
                        <div>
                            <img src="{{$tipspel->banner_image}} " alt="" class="banner_image" height="100" />
                        </div>
                        <div>
                            <h4>{{$tipspel->fullname}} </h4> <span class="text">"{{$tipspel->nickname}}"</span>
                            
                            <p class="details-text">
                              {!! $tipspel->details !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      @endsection