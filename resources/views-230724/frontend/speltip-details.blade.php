@extends('frontend.layout.master')
  @section('content')
      <!-- Page Header-->
   
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
      <!-- Section Breadcrumbs-->
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

      <!-- Blog Post-->
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-8">
              <div class="blog-post">
                <!-- Badge-->
                <!-- <div class="badge" style="background-color:#64B000">SpelTip
                </div> -->
                <h5 class="blog-post-title">{{$match->name}}</h5>
                @if($match->sub_title_btn)
                <h3 class="text-center">{{$match->sub_title}}</h3>
                @endif
                <div class="blog-post-header">
                  
                  <div class="blog-post-meta">
                    <time class="blog-post-time" datetime="2022"><span class="icon mdi mdi-clock"></span>{{dateFormatconverter($match->cdt)}}</time>
                  </div>
                </div>
                <div class="blog-post-author-quote">
                  <p></p>
                </div>
                
                <div class="blog-post-content">
                 @if($match->youtube==null)
                 <img src="{{$match->image}}" alt="" width="683" height="407"/>
                 @else
                  {!! $match->youtube !!}
                 @endif
                  <!-- Quote Default-->
                  <!-- <article class="quote-default">
                    <div class="quote-default-text">
                      <p class="q">This week in sports betting proved to be very unpredictable</p>
                    </div>
                  </article> -->
                  <p>{!! $match->details !!}</p>
                </div>
              </div>
            
              
            </div>
            <div class="col-lg-4">
              <!-- Blog Alide-->
              <div class="block-aside">
              
                <div class="block-aside-item">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Alla Speltips
                      </h5>
                      <!-- <a class="button button-xs button-gray-outline" href="{{route('home.news')}}">Alla Speltips</a> -->
                    </div>
                  </article>

                  <!-- List Post Classic-->
                  <div class="list-post-classic">
                      <!-- Post Classic-->
                      @foreach($matchspel as $match)
                      <article class="post-classic">
                        <div class="post-classic-aside"><a class="post-classic-figure" href="{{route('home.speltips_details',$match->id)}}"><img src="{{$match->image}}" alt="" width="94" height="94"/></a></div>
                        <div class="post-classic-main">
                          <p class="post-classic-title"><a href="{{route('home.speltips_details',$match->id)}}">{{$match->name}}</a></p>
                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2022">{{dateFormatconverter($match->cdt)}}</time>
                          </div>
                        </div>
                      </article>
                      @endforeach
                      <!-- Post Classic-->
                      
                      <!-- Post Classic-->
                     
                      <!-- Post Classic-->
                      
                  </div>
                </div>
                <div class="block-aside-item">
                  <!-- Heading Component-->
                  

                  <!-- Buttons Media-->
               
                <div class="block-aside-item">
                  <!-- Heading Component-->
                 

                  <!-- Mail Form Modern-->
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection