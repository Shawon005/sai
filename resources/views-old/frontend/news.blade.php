@extends('frontend.layout.master')
  @section('content') 
      
      <!-- Page Header-->
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
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            @foreach($newses as $news)
            <div class="col-lg-4">
              <article class="post-corporate news-image">    
                <a class="post-corporate-figure" href="{{route('home.newses',$news->news_slug)}}"><img src="{{$news->news_image}}" alt="" width="768" height="414"/>
                </a>
                <div class="post-corporate-content">
                  <div class="post-corporate-header">
                    <!-- Badge-->
                    <a href="{{route('home.news_cat',$news->news_category)}}"><div class="badge p-1 pe-2 ps-2 rounded-5"style="background-color:#64B000">{{$news->news_category}}
                    </div></a>
                    <time class="post-corporate-time text" datetime="2022">{{dateFormatconverter($news->news_cdt)}}</time>
                    <div class="post-corporate-view">
                      <span>{{user($news->user_id)}}</span>
                    </div>
                  </div>
                  <h4 class="post-corporate-title">
                    <a href="{{route('home.newses',$news->news_slug)}}">{{$news->news_title}}</a>
                  </h4>
                  <div class="post-corporate-text">
                    <p>{{ Str::limit(strip_tags($news->news_description),100) }}</p>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
          </div>
          <div class="mt-5">
            {{$newses->links()}}
          </div>
        </div>
      </section>
      
      


      <!-- Page Footer-->
  @endsection