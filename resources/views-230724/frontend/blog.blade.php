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
           
           <h3>{{$content->contain1}}</h3>
      </div>
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
          @foreach($blogs as $blog)
            <div class="col-lg-6 ">  
              <article class="card-details2 table_body" style="border: unset;">
                <h5 class="post-miranda-title blog_title" style="background-color: unset; color: #2d2b2b; padding-top: 15px;"><a href="{{route('home.blog',$blog->blog_slug)}}">{{$blog->blog_name}}</a></h5>
                <div class="row " style="margin-top:-5px; padding:20px">
                  <div class="col-lg-5">
                    <div class="post-miranda-aside"><img src="{{$blog->thumbnail}}" alt="" style="width:200px; height:300px" class="blog_img"/></div>
                  </div>
                  <div class="col-lg-7" >
                    <a href="{{$blog->banner_link}}">
                    <img src="{{$blog->banner_image}}" alt="" style="height:90px; width:100%;"/>
                    </a>
                    <div class="post-miranda-text clr-7 mt-4">
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