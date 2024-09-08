@extends('frontend.layout.master')
  @section('content')
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
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <strong class="text">AKTUELLA POOLTIPS</strong><span class="line"></span>
                    </div>
                    <div class="table-responsive">
                      <table class="table  text  text-center" style="vertical-align: middle;">
                        <thead>
                            <tr>
                                <th>SPLESTOPP</th>
                                <th>SPLETUPPEN</th>
                                <th>TITLE</th>
                                <th>POOLSPLE</th>
                                <th>SPLEBLOGS</th>
                                <th>SYSTEM</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($matchs as $match)
                            <tr>
                                <td>{{date("d M",strtotime($match->cdt))}}<br>{{date("h:i",strtotime($match->cdt))}}</td>
                                <td><a class="green-button" href="{{route('home.tipspel.details',$match->tipstar_id)}}"><img src="{{table('tipspel','id',$match->tipstar_id,'profile_image')}}" width="40" height="40"alt=""class="rounded-circle"><br>{{table('tipspel','id',$match->tipstar_id,'nickname')}}</a></td>
                                <td class="green-button"><span><a class="green-button" href="{{route('home.match_event',$match->slug)}}">{{$match->title}}</a></span></td>
                                <td>{{table('category','id',$match->category_id,'name')}}</td>
                                <td class=""><span><a href="{{$match->company_link}}"><img src="{{$match->company_logo}}" alt="{{$match->company_name}}" width="50" height="50" class="rounded-circle"></a></span></td>
                                <td>108 redar</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                   

                    <div class="col-12 mt-3">
                        <strong class="text ">AKTUELLA SPELTIPS</strong><span class="line1"></span>
                        <span class="dropdown ">
                            <button type="button" class="btn  dropdown-toggle text" style="background-color:#64B000; color:#ffff" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              FILTER
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"style="--bs-dropdown-link-active-bg:#64b000;--bs-dropdown-link-hover-bg:#64b000;">
                              @foreach($categories as $category)
                              <li class="dropdown-item"><a href="{{route('home.category_fileter',['id'=>$category->id,'name'=>$category->name])}}">{{$category->name}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                    </span>
                    @if(count($matchspel)==0)
                    <h5 class="text-center">There is no data In this category</h5>
                    @else
                    <div class="table-responsive">
                      <table class="table text  text-center" style="vertical-align: middle;">
                          <thead>
                              <tr>
                                  <th>SPLESTOPP</th>
                                  <th>SPLETUPPEN</th>
                                  <th>MATCH/EVENT</th>
                                  <th>SPLE</th>
                                  <th>SPLEBLOGS</th>
                                  <th>REK ODDS</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($matchspel as $match)
                              
                              <tr>
                                  <td>{{date("d M",strtotime($match->cdt))}}<br>{{date("h:i",strtotime($match->cdt))}}</td>
                                  <td><a class="green-button"href="{{route('home.tipspel.details',$match->tipstar_id)}}"><img src="{{table('tipspel','id',$match->tipstar_id,'profile_image')}}" width="40" height="40"alt=""class="rounded-circle"><br>{{table('tipspel','id',$match->tipstar_id,'nickname')}}</a></td>
                                  <td class="green-button"><span><a class="green-button" href="{{route('home.match_event',$match->slug)}}">{{$match->title}}</a></span></td>
                                  <td>{{table('category','id',$match->category_id,'name')}}</td>
                                  <td class=""><span><a href="{{$match->company_link}}"><img src="{{$match->company_logo}}" alt="{{$match->company_name}}" width="50" height="50" class="rounded-circle"></a></span></td>
                                  <td>108 redar</td>
                              </tr>
                                
                              @endforeach
                          </tbody>
                      </table>
                    </div> 
                    @endif
              </div>
            </div>
          </div>
        </div> 
    </section>
    <section class="section section-sm bg-gray-100 faq-section">
        <div class="container">
            <div class="card ">
                <div class="row row-30">
                    <div class="col-lg-8">
                        <div class="col-lg-12 text-center mb-5 pb-5 mt-3">
                            <p class="faq1">Hur tar vi fram våra speltips?</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                          @foreach($speltips as $speltip)
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" style="color: #000 !important;"type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$speltip->id}}" aria-expanded="false" aria-controls="collapseTwo">
                                {{$speltip->question}}
                                </button>
                            </h2>
                            <div id="collapse{{$speltip->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  {!! $speltip->answer !!}
                                </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                      @foreach($adss as $ads)
                      <div class="spel-img mb-3">
                        <a href="{{$ads->link}}">
                          <img class="spel-img" src="{{$ads->image}}" alt="" />
                          </a>
                      </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
      </section> 
 @endsection