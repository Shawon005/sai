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
                  <div>
                    <p>{{$content->contain1}}
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
          <div class="row row-30 ">
            @foreach($andelars as $andelar)
            <div class="col-lg-4">
              <div class="card-details3 table_body">
                <div class="row card-hd">
                  <div class="col-4">
                    <img src="{{$andelar->image}}" class="mini-img" alt="mini-img">
                  </div>
                  <div class="col-8"><h4 class="vertical-center1">{{ $andelar->title}}</h4></div>
                </div>
                @php $sub=andelar($andelar->id); @endphp
                @foreach($sub as $sub_andelar)
                <a href="{{$sub_andelar->link}}" style=" color:white;">
                <div class="sub_andela">
                    <div class="row  custom table_body1" style="background-color: {{$sub_andelar->color}};">
                      <div class="col-4">
                        <img src="{{$sub_andelar->image}}" alt="" class="custom-img">
                      </div>
                      <div class="col-8">
                        <p class="andelar_text vertical-center2">{{$sub_andelar->title}} </p>
                      </div>
                    </div>
                </div>
                  
                </a> 
                @endforeach
               
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </section>

      <section class="section  bg-gray-100">
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

      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-12">
              
              <article class="">
                <!-- <div class="post-miranda-content"> -->
                  <div>
                    <p>{{$content->contain2}}
                    </p>
                  </div>
                <!-- </div> -->
              </article>

            </div>
          </div>
        </div>
      </section>
      
      



 @endsection