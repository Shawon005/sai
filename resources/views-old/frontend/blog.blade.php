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
     
      <div class="section section-sm bg-gray-100 text-center">
            <h3>VÅRA</h3>
           <h3>{{$content->contain1}}</h3>
      </div>
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
          @foreach($blogs as $blog)
            <div class="col-lg-6 ">  
              <article class="card-details2 table_body">
                <h5 class="post-miranda-title blog_title"><a href="{{route('home.blog',$blog->blog_slug)}}">{{$blog->blog_name}}</a></h5>
                <div class="row " style="margin-top:10px; padding:20px">
                  <div class="col-lg-4">
                    <div class="post-miranda-aside"><img src="{{$blog->blog_image}}" alt="" width="100%" class="blog_img"/></div>
                  </div>
                  <div class="col-lg-8" >
                    <a href="{{$setting->sub_bannar_link}}">
                    <img src="{{$setting->sub_bannar}}" alt="" style="height:90px" height="397"/>
                    </a>
                    <div class="post-miranda-text clr-7">
                      <p>{{ Str::limit(strip_tags($blog->blog_description),250) }}</p>
                    </div>
                  </div>
                </div>
              </article> 
            </div>
            @endforeach
         
          </div>
          
        </div>
        <div class="mt-5">
        {{$blogs->links()}}
        </div>
        
      </section>
     
      


      <!-- Page Footer-->
  @endsection