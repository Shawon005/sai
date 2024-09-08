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
                      <table id="myTable" class="table  text  text-center" style="vertical-align: middle;">
                        <thead>
                            <tr>
                                <th>SPELSTOPP</th>
                                <th>SPELTRUPPEN</th>
                                <th>TITEL</th>
                                <!--<th>POOLSPEL</th>-->
                                <th>SPELBOLAG</th>
                                <th>SYSTEM</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($matchs as $match)
                            <tr>
                                <td>{{date("d M",strtotime($match->cdt))}}<br>{{date("h:i",strtotime($match->cdt))}}</td>
                                <td><a class="green-button" href="{{route('home.tipspel.details',$match->tipstar_id)}}"><img src="{{table('tipspel','id',$match->tipstar_id,'profile_image')}}" width="40" height="40"alt=""class="rounded-circle"><br>{{table('tipspel','id',$match->tipstar_id,'nickname')}}</a></td>
                                <td class="green-button"><span><a class="green-button" href="{{route('home.match_event',$match->slug)}}">{{$match->title}}</a></span></td>
                                <!--<td>{{table('category','id',$match->category_id,'name')}}</td>-->
                                <td class=""><span><a href="{{$match->company_link}}"><img src="{{$match->company_logo}}" alt="{{$match->company_name}}" width="50" height="50" class="rounded-circle"></a></span></td>
                                <td>10 redar</td>
                            </tr>
                            @endforeach
                        </tbody>
                       
                      </table>
                      
                    </div>
                    <div class="pull-right mt-3">
                         {{$matchs->links()}}
                        </div>
                   
              </div>
            </div>
          </div>
        </div> 
    </section>
    <section class="section section-sm bg-gray-100 faq-section">
        <div class="container">
            <div class="card ">
                <div class="row row-30 mt-3 mb-1">
                    <!-- <div class="col-lg-8">
                        <div class="col-lg-12 text-center mb-5 pb-5 mt-3">
                            <p class="faq1">{{$content->contain1}}</p>
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
                    </div> -->
                    @foreach($adss->slice(0,2) as $ads)
                    <div class="col-lg-4 ">
                      <div class="spel-img mb-3">
                        <a href="{{$ads->link}}">
                          <img class="spel-img" src="{{$ads->image}}" alt="" />
                          </a>
                      </div>
                     
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
      </section> 
 @endsection