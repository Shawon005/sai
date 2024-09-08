@extends('frontend.layout.master')
  @section('content')
      <!-- Page Header-->
   

      <!-- Section Breadcrumbs-->
      <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{asset('')}}frontend/images/bg-breadcrumbs-1-1920x726.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Nyheter post</h3>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{route('home.index')}}">Home</a></li>
              <li><a href="{{route('home.news')}}">Nyheter</a></li>
              <li class="active">Nyheter post</li>
            </ul>
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
                <div class="badge" style="background-color:#64B000">Nyheter
                </div>
                <h3 class="blog-post-title">{{$news->news_title}}</h3>
                <div class="blog-post-header">
                  <!-- <div class="blog-post-author"><img class="img-circle" src="{{asset('')}}frontend/images/demo.jpg" alt="" width="63" height="63"/>
                    <p class="post-author">{{user($news->user_id)}}</p>
                  </div> -->
                  <div class="blog-post-meta">
                    <time class="blog-post-time" datetime="2022"><span class="icon mdi mdi-clock"></span>{{dateFormatconverter($news->news_cdt)}}</time>
                  </div>
                </div>
                <div class="blog-post-author-quote">
                  <p></p>
                </div>
                
                <div class="blog-post-content">
                <!-- <p>{!! $news->news_description !!}</p> -->
                 <img src="{{$news->news_image}}" alt="" width="683" height="407"/>
                 
                  <!-- Quote Default-->
                  <!-- <article class="quote-default">
                    <div class="quote-default-text">
                      <p class="q">This week in sports betting proved to be very unpredictable</p>
                    </div>
                  </article> -->
                  <p>{!! $news->news_description !!}</p>
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
                      <h5 class="heading-component-title">Categories
                      </h5>
                    </div>
                  </article>

                  <!--Block Categories-->
                  <div class="block-categories">
                    <ul class="list-marked list-marked-categories">
                      @foreach($categories as $category)
                      @if(count(cat($category->name))>0)
                      <li><a href="{{route('home.news_cat',$category->name)}}">{{$category->name}}</a><span class="list-marked-counter">{{count(cat($category->name))}}</span></li>
                      @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="block-aside-item">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Övriga nyheter
                      </h5><a class="button button-xs button-gray-outline" href="{{route('home.news')}}">TILLBAKA</a>
                    </div>
                  </article>

                  <!-- List Post Classic-->
                  <div class="list-post-classic">
                      <!-- Post Classic-->
                      @foreach($newses as $news)
                      <article class="post-classic">
                        <div class="post-classic-aside"><a class="post-classic-figure" href="{{route('home.newses',$news->news_slug)}}"><img src="{{$news->news_image}}" alt="" width="94" height="94"/></a></div>
                        <div class="post-classic-main">
                          <p class="post-classic-title"><a href="{{route('home.newses',$news->news_slug)}}">{{$news->news_title}}</a></p>
                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2022">{{dateFormatconverter($news->news_cdt)}}</time>
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