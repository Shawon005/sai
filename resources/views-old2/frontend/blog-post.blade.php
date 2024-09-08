@extends('frontend.layout.master')
  @section('content')
      <!-- Page Header-->
   

      <!-- Section Breadcrumbs-->
      <section class="section parallax-container breadcrumbs-wrap" data-parallax-img="{{asset('')}}frontend/images/bg-breadcrumbs-1-1920x726.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">OM VÅR MEDIA</h3>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{route('home.index')}}">Home</a></li>
              <li><a href="{{route('home.blogs')}}">OM VÅR MEDIA</a></li>
              <li class="active">OM VÅR MEDIA post</li>
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
                <div class="badge" style="background-color:#b50eed">OM VÅR MEDIA
                </div>
                <h3 class="blog-post-title">{{$blog->blog_name}}</h3>
                <div class="blog-post-header">
                  <!-- <div class="blog-post-author"><img class="img-circle" src="{{asset('')}}frontend/images/demo.jpg" alt="" width="63" height="63"/>
                    <p class="post-author">{{user($blog->user_id)}}</p>
                  </div> -->
                  <div class="blog-post-meta">
                    <time class="blog-post-time" datetime="2022"><span class="icon mdi mdi-clock"></span>{{dateFormatconverter($blog->blog_cdt)}}</time>
                    <!-- <div class="blog-post-comment"><span class="icon mdi mdi-comment-outline"></span>{{count($comments) }}</div> -->
                  </div>
                </div>
                <div class="blog-post-author-quote">
                 
                </div>
                
                <div class="blog-post-content">
                <!-- <p>{!! $blog->blog_description !!}</p> -->
                 <img src="{{$blog->blog_image}}" alt="" width="683" height="407"style="height:393px"/>
                 
                  <!-- Quote Default-->
                  <article class="quote-default">
                    <!-- <div class="quote-default-text">
                      <p class="q">This week in sports betting proved to be very unpredictable</p>
                    </div> -->
                  </article>
                  <p>{!! $blog->blog_description !!}</p>
                </div>
              </div>
            
              <!-- <div class="row">
                <div class="col-sm-12">
                 
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">{{count($comments) }} comments
                      </h5>
                    </div>
                  </article>

                  <div class="blog-post-comments">
                   
                    @foreach($comments as $comment)
                    <div class="post-comment post-comment-parent">
                      <div class="post-comment-aside"><img class="img-circle" src="{{asset('')}}frontend/images/demo.jpg" alt="" width="69" height="69"/>
                      </div>
                      <div class="post-comment-main">
                        <div class="post-comment-header">
                          <h5 class="author-name">{{$comment->name}}</h5>
                          <time class="post-comment-time" datetime="2022">{{date('d M',strtotime($comment->cdt))}}
                          </time>
                        </div>
                        <div class="post-comment-text">
                          <p>{{$comment->question}}</p>
                        </div>
                        <div class="post-comment-footer">

                          <div class="comment-reply"  data-bs-toggle="collapse" href="#collapseExample{{$comment->id}}"  ><span class="icon mdi mdi-comment-outline"></span>Reply</div>
                        </div>
                      </div>
                    </div>
                    <div class="post-comment-child mb-3">
                      <div class="comment-box-main collapse" id="collapseExample{{$comment->id}}">
                        <form class="rd-mailform reply-box-form" id="reply_from"   method="post" action="{{route('admin.review.update',$comment->id)}}">
                          @csrf
                          @method('PUT')
                        <div class="form-wrap">
                            <label class="form-label" for="comment-message1"></label>
                            <input type="text"class="form-input" id="comment-message1"name="name"placeholder="Your Name">
                          </div>
                          <div class="form-wrap">
                            <label class="form-label" for="comment-message2"></label>
                            <input type="email"class="form-input" id="comment-message2"name="email"placeholder="Your Email">
                          </div>
                          <div class="form-wrap">
                            <label class="form-label" for="comment-message"></label>
                            <textarea class="form-input" id="comment-message" name="reply" placeholder="Your comment"></textarea>
                          </div>
                          <div class="form-button mb-3">
                            <button class="button button-primary" id="reply_box" type="submit">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    
                   @if($comment->reply!=null)
                 
                    @foreach($comment->reply as $reply)
                    <div class="post-comment post-comment-child">
                      <div class="post-comment-aside"><img class="img-circle" src="{{asset('')}}frontend/images/demo.jpg" alt="" width="69" height="69"/>
                      </div>
                      <div class="post-comment-main">
                        <div class="post-comment-header">
                          <h5 class="author-name">{{$reply->name}}</h5>
                          <time class="post-comment-time" datetime="2022">{{date('d M',strtotime($reply->cdt))}}
                          </time>
                        </div>
                        <div class="post-comment-text">
                          <p>{{$reply->reply}}</p>
                        </div>
                        <div class="post-comment-footer">

                        </div>
                      </div>
                    </div>
                    @endforeach
                    @endif
                    @endforeach
                    <div class="comment-box">
                     
                      <div class="comment-box-main">
                       
                     
                        <form class="rd-mailform comment-box-form" id="comment_from"   method="post" action="{{route('admin.review.store')}}">
                          @csrf
                          <input type="hidden"class="" value="{{$blog->blog_id}}"name="blog_id">
                        <div class="form-wrap">
                            <label class="form-label" for="comment-message1"></label>
                            <input type="text"class="form-input" id="comment-message1"name="name" placeholder="Your Name">
                          </div>
                          <div class="form-wrap">
                            <label class="form-label" for="comment-message2"></label>
                            <input type="email"class="form-input" id="comment-message2"name="email"placeholder="Your Email">
                          </div>
                          <div class="form-wrap">
                            <label class="form-label" for="comment-message"></label>
                            <textarea class="form-input" id="comment-message" name="question" placeholder="Your Comment"></textarea>
                          </div>
                          <div class="form-button">
                            <button class="button button-primary" id="comment_box" type="submit">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="col-lg-4">
              <!-- Blog Alide-->
              <div class="block-aside">
                <div class="block-aside-item">
                  <!-- Heading Component-->
                  <!-- <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">Categories
                      </h5>
                    </div>
                  </article> -->

                  <!--Block Categories-->
                  <!-- <div class="block-categories">
                    <ul class="list-marked list-marked-categories">
                    <li><a href="{{route('home.blog_cat','Kronika')}}">Kronika</a><span class="list-marked-counter">68</span></li>
                      <li><a href="{{route('home.blog_cat','Artikel')}}">Artikel</a><span class="list-marked-counter">16</span></li>
                      <li><a href="{{route('home.blog_cat','Sport')}}">Sport</a><span class="list-marked-counter">20</span></li>
                      <li><a href="{{route('home.blog_cat','Spel')}}">Spel</a><span class="list-marked-counter">20</span></li>
                    </ul>
                  </div>
                </div> -->
                <div class="block-aside-item">
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">In The Övrig media
                      </h5><a class="button button-xs button-gray-outline" href="{{route('home.blogs')}}">All Blog</a>
                    </div>
                  </article>

                  <!-- List Post Classic-->
                  <div class="list-post-classic">
                      <!-- Post Classic-->
                      @foreach($blogs as $blog)
                      <article class="post-classic">
                        <div class="post-classic-aside"><a class="post-classic-figure" href="{{route('home.blog',$blog->blog_slug)}}"><img src="{{$blog->blog_image}}" alt="" width="94" height="94"/></a></div>
                        <div class="post-classic-main">
                          <p class="post-classic-title"><a href="{{route('home.blog',$blog->blog_slug)}}">{{$blog->blog_name}}</a></p>
                          <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                            <time datetime="2022">{{dateFormatconverter($blog->blog_cdt)}}</time>
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
