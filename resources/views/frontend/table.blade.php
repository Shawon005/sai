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
          <div class="row row-50">
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
        <div class="container tabulo">
        @php $mon=0; $tis=0; $ons=0; $tor=0; $fre=0; $lor=0; $son=0; @endphp
          @foreach($tables as $table)
          <?php
            if($table->date=='MÅNDAG')
               $mon=1; 
            if($table->date=='TISDAG') 
              $tis=1;
            if($table->date=='ONSDAG')
              $ons=1;
            if($table->date=='TORSDAG')
              $tor=1;
            if($table->date=='FREDAG')
              $fre=1;
            if($table->date=='LÖRDAG')
              $lor=1;
            if($table->date=='SÖNDAG')
              $son=1;  
          ?>
          @endforeach
          <div class="table-heading">
                  <h4>{!! $content->contain1 !!}</h4>
          </div>
          @if($mon==1)
            <div class="row p-3 ">
              <!-- mondag -->
              <div class="col-lg-12 ">
                <div class="table-heading">
                  <h4>MÅNDAG</h4>
                </div>
              </div>
              @endif
            @foreach($tables as $table)
            @if($table->date=='MÅNDAG')
            
            <div class="col-lg-3 " style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body" style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
              </a>
            </div>
            @endif
            @endforeach
    

            <!-- tisdag -->
            @if($tis==1)
            <div class="col-lg-12 pt-4">
              <div class="table-heading">
                <h4>Tisdag</h4>
              </div>
            </div>
            @endif
            @foreach($tables as $table)
            @if($table->date=='TISDAG')
           
            <div class="col-lg-3"style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body"  style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
            </a>
            </div>
            @endif
            @endforeach

            <!-- onsdag -->
            @if($ons==1)
            <div class="col-lg-12 pt-4">
              <div class="table-heading">
                <h4>Onsdag</h4>
              </div>
            </div>
            @endif
            @foreach($tables as $table)
            @if($table->date=='ONSDAG')
            
            <div class="col-lg-3" style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body" style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
            </a>
            </div>
            @endif
            @endforeach

            <!-- torsdag -->
            @if($tor==1)
            <div class="col-lg-12 pt-4" >
              <div class="table-heading">
                <h4>Torsdag</h4>
              </div>
            </div>
            @endif
            @foreach($tables as $table)
            @if($table->date=='TORSDAG')
           
            <div class="col-lg-3"style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body" style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
            </a>
            </div>
            @endif
            @endforeach

            <!-- fredag -->
            @if($fre==1)
            <div class="col-lg-12 pt-4">
              <div class="table-heading">
                <h4>Fredag</h4>
              </div>
            </div>
            @endif
            @foreach($tables as $table)
            @if($table->date=='FREDAG')
            
            <div class="col-lg-3"style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body" style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
            </a>
            </div>
            @endif
            @endforeach

            <!-- lordag -->
            @if($lor==1)
            <div class="col-lg-12 pt-4">
              <div class="table-heading">
                <h4>lordag</h4>
              </div>
            </div>
            @endif
            @foreach($tables as $table)
            @if($table->date=='LÖRDAG')
            
            <div class="col-lg-3"style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body" style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
            </a>
            </div>
            @endif
            @endforeach

            <!-- sondag -->
            @if($son==1)
            <div class="col-lg-12 pt-4">
              <div class="table-heading">
                <h4>Sondag</h4>
              </div>
            </div>
            @endif
            @foreach($tables as $table)
            @if($table->date=='SÖNDAG')
           
            <div class="col-lg-3"style="margin-bottom: 10px;padding-right: 3px !important; padding-left: 3px !important;">
            <a href="{{$table->link}}">
              <article class="post-corporate table-body table_body" style="background-image: url({{$table->image}});min-height: 150px;">    
                <div class="post-corporate-content card-bg">
                  <div class="post-corporate-header table_time">
                    <time class="post-corporate-time" datetime="2022">{{timeFormatconverter($table->cdt)}}</time>
                    <div class="badge table-category"style="background-color:{{(($table->category=='Live')?'#FF4F2E':(($table->category=='PODD')?'#64B000':'#B005B6'))}}">{{$table->category}}</div>
                  </div>
                  <div class="post-corporate-text bottom-text" style="margin-top: 75px;">
                    <p>{{$table->title}}</p>
                  </div>
                </div>
              </article>
            </a>
            </div>
            @endif
            @endforeach

            

            
          </div>

        </div>
      </section>
    
      <!-- Page Footer-->
    @endsection