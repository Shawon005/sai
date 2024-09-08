@extends('frontend.layout.master')
  @section('content')
  @php $setting=setting(); @endphp
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
                <a href="{{$setting->sub_bannar_link}}">
                  <img src="{{$setting->sub_bannar}}" alt="" width="1170" height="397"/>
                </a>
                <!-- </div> -->
                
              </article>

            </div>
            
          </div>
        </div>
      </section>

      <section class="section  bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
              
              <article class="">
                <!-- <div class="post-miranda-content"> -->
                  <div class="text-center">
                    <p>{!! $content->contain1 !!}
                    </p>
                  </div>
                <!-- </div> -->
              </article>

            </div>
          </div>
        </div>
      </section>

      <section class="section section-sm bg-gray-100">
        <div class="container">

          <div class="row row-30">
            @foreach($tipspels as $tipspel)
            <div class="col-lg-4">
            <a  href="{{route('home.tipspel.details',$tipspel->id)}}">
              <article class="post-corporate card-details" style="background-color: #383838; min-height:392px"> 
              
                  <div>
                    <img src="{{$setting->fav_logo}}" class="position-absolute logo" alt="" width="60" height="40" />
                  </div>
                  <div class="upper-section">
                    <img src="{{$tipspel->profile_image}}" class="upper-img" alt="" width="240" height="90"/>
                  </div>  

                  <div class="text-center">
                    <h4 style="color: #efefef; margin-top: 10px;">{{$tipspel->fullname}} </h4> <span class="text" style="color: #efefef;">"{{$tipspel->nickname}}"</span><br>
                    <span style="color: #efefef;">{!! Str::limit(strip_tags($tipspel->details),60) !!}</span> <span class="read-button"><a class="read-button" href="{{route('home.tipspel.details',$tipspel->id)}}" style="color: #64b000;">läs mer</a></span>
                        
                  </div>
                
              </article></a>
            </div>
            @endforeach
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
                  <img src="{{$setting->sub_bannar}}" alt="" width="1170" height="397"/>
                <!-- </div> -->
                
              </article>

            </div>
            
          </div>
        </div>
      </section>

      <section class="section bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-12">
              
              <article class="">
                <!-- <div class="post-miranda-content"> -->
                  <div class="text-center">
                    <p>{!! $content->contain2 !!}
                    </p>
                  </div>
                <!-- </div> -->
              </article>

            </div>
          </div>
        </div>
      </section>
      
      


@endsection