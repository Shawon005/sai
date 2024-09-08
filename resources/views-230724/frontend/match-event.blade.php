@extends('frontend.layout.master')
  @section('content')
      
      <!-- Swiper-->

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
      

      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-4">
              @if($match->api) 
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <img src="{{$setting->header_logo_b}}" alt="bit-img" class="bit-img" >
                    </div>
                    <div class="col-12">
                      <div class="div-1 mb-2">
                        <ul class="list-group">
                          @foreach($data as $id=> $matchs)
                          <li class="list-group-item">
                            <div class="row">
                              <div class="col-7">
                                <div class="pull-left">
                                  <span  class="badge-primary iteam-no">{{$id+1}}</span> 
                                  {{$matchs['description']}}
                                </div>
                              </div>
                              <div class="col-5">
                                <div class="iteam-content pull-right">
                               <span class="badge badge-primary "><h5 class="text-white">1</h5> </span> <span class="badge badge-primary "><h5 class="text-white">X</h5></span> <span class="badge badge-primary "><h5 class="text-white">2</h5></span>
                                    @if($matchs['odds']!=null)
                                  <br><span class="odds">{{$matchs['odds']['home']}}</span>  <span class=" odds">{{$matchs['odds']['draw']}}</span>  <span class=" odds">{{$matchs['odds']['away']}}</span>
                                    @endif
                                </div>
                              </div>
                            </div>
                          </li>
                          @endforeach
                          <!-- <li class="list-group-item">
                            <div class="pull-left">
                              <span  class="badge-primary iteam-no">1</span> 
                              England-Ukraina
                            </div>
                            <div class="iteam-content pull-right">
                               <span class="badge badge-primary ">1</span> <span class="badge badge-primary">2</span> <span class="badge badge-primary">3</span> 
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="pull-left">
                              <span  class="badge-primary iteam-no">1</span> 
                              England-Ukraina
                            </div>
                            <div class="iteam-content pull-right">
                               <span class="badge badge-primary ">1</span> <span class="badge badge-primary">2</span> <span class="badge badge-primary">3</span> 
                            </div>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 ">
                      <div class="div-2 text-center">
                        <button type="button" class=" bit-button ">Button-1</button>
                        <button type="button" class=" bit-button ">Button-2</button>
                        <button type="button" class=" bit-button ">Button-3</button>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="div-3 mx-2">
                        <p>SPELSTOPP: {{date('Y-m-d h:m',strtotime($match->cdt))}}</p>
                      </div>
                    </div>
                    <div class="col-12 d-grid">
                      <a class="submit-button text-center" type="button" href="{{$match->submit_link}}">SUBMIT</a>
                    </div>
                  </div>
                </div>
              </div>
              @else
              <div class="card-details1">
                <hr class="new1">
                <H4 class="mb-4">SPELTIPS</H4>
                <div class="mb-4">
                   <h5 class="text2">MATCH/EVENT</h5>
                   <hr class="new">
                   <p class="text3">{{$match->title}}</p>
                </div>
                <div class="mb-4">
                   <h5 class="text2">SPELSTOPP</h5>
                   <hr class="new">
                   <p class="text3">{{date('Y-m-d h:m',strtotime($match->cdt))}}</p>
                </div>
                <div class="mb-4">
                   <h5 class="text2">SPEL</h5>
                   <hr class="new">
                   <p class="text3">{{table('tipspel','id',$match->tipstar_id,'fullname')}}</p>
                </div>
                <div class="mb-4">
                   <h5 class="text2">ODDS</h5>
                   <hr class="new">
                   <p class="green-button text3">{{$match->odds}}</p>
                </div>
                <div class="col-12">
                      <div class="div-3 m-2 text-center">
                        <img src="{{$match->company_logo}}" alt="" style="width: 200px;height: 50px;">
                      </div>
                    </div>
                    <div class="col-12 d-grid">
                      <a class="submit-button text-center" type="button" href="{{$match->submit_link}}">SPELA NU</a>
                    </div>
              </div>
              @endif
            </div>
            <div class="col-lg-8">
              <article class="mb-5">
                <img src="{{$match->banner}}" alt="" width="768" height="414"/>
              </article>

              <!-- Post Corporate-->
              <article class="post-corporate">
                <!-- banner image -->
                <!-- <img src="images/post-corporate-1-768x414.jpg" alt="" width="768" height="414"/> -->

                <div class="post-corporate-content">
                  <h3>{{$match->title}}</h3>

                  <div class="comment-classic-header mini-border py-2 mt-3">
                    <div class="comment-classic-header-aside"><img src="{{table('tipspel','id',$match->tipstar_id,'profile_image')}}" alt="" width="63" height="63"/>
                    </div>
                    <div class="comment-classic-header-main">
                      <p class="comment-classic-title">{{table('tipspel','id',$match->tipstar_id,'fullname')}}</p>
                      <time class="comment-classic-time" datetime="2022">published : {{date('d/m/y',strtotime($match->cdt))}}
                      </time>
                    </div>
                  </div>

                  <div class="post-corporate-text mt-3">
                    {!! $match->details !!}
                  </div>
                </div>

              </article>
            </div>

          </div>
        </div>
      </section>

    
      
    
      <!-- Page Footer-->
     @endsection