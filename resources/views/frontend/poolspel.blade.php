@extends('frontend.layout.master')
  @section('content') 
      
      <!-- Page Header-->

      @php $setting=setting(); @endphp
      <!-- Swiper-->
  <!-- All Sports-->
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row isotope-wrap row-30">
            <!-- Isotope Filters-->
            <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button" data-custom-toggle="#isotope-filters" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true">Select<span class="caret"></span></button>
                <ul class="isotope-filters-list" id="isotope-filters">
                  @foreach($pools as $id=>$pool)
                    <li class="isotope-filters-list-item  tab" data-name="{{$pool->tab_name}}"><a class="isotope-filters-list-link {{($id==0)?'active':''}}" data-isotope-filter="{{$pool->tab_name}}" data-isotope-group="gallery" href="#"><span class="isotope-filters-list-img"><span class="{{($id==0)? $fb=$pool->tab_name:''}}"><img src="{{$pool->tab_image}}" alt="" width="70px" height="40px"></span></span><span class="isotope-filters-list-text">{{$pool->tab_name}}</span> </a></li>
                  @endforeach
                </ul>
                <div class="isotope-filters-info">
                  <p class="isotope-filters-info-text name">{{$fb}}</p>
                </div>
              </div>
            </div>
            <!-- Isotope Content-->
            <div class="col-lg-12">
              <div class="row isotope row-30" data-isotope-layout="masonry" data-column-class=".col-1" data-isotope-group="gallery">
                <div class="col-1 isotope-item isotope-sizer"></div>
                <!-- Football-->
                @foreach($pools as $id=>$pool)
                <div class="col-lg-12 isotope-item tab2" data-filter="{{$pool->tab_name}}" >
                  <!-- Heading Component-->
                  <article class="heading-component">
                    <div class="heading-component-inner">
                      <h5 class="heading-component-title">{{$pool->tab_name}}
                      </h5>
                      <!--<div>-->
                      <!--  <ul class="list-inline list-inline-xs">-->
                      <!--    <li><a class="button button-xs button-red-outline active" href="#">Live</a></li>-->
                      <!--  </ul>-->
                      <!--</div>-->
                    </div>
                  </article>

                 
                  <div class="sport-table">
                      <!-- <section class="section section-sm bg-gray-100">
                        <div class="">
                          <div class="row row-30">
                            <div class="col-lg-12">
                              
                              
                              <article class="post-miranda">
                                
                                <a href="{{$setting->sub_bannar_link}}">
                                  <img src="{{$setting->sub_bannar}}" alt="" width="1170" height="397"/>
                                </a>
                              
                              </article>
                            </div>
                            
                          </div>
                        </div>
                      </section> -->
                      <section class="section  bg-gray-100">
                        <div class="container">
                          <div class="row row-50">
                            <div class="col-lg-12">
                              
                            
                              <article class="">
                               
                                <div>
                                  <div>
                                    <p class="text">{!! $pool->contain1 !!}
                                    </p>
                                  </div>
                                  <div class="down-logo">
                                    <img src="{{$pool->contain_image}}" alt=""  width="1170" height="200"/>
                                  </div>
                                  <p class="text">{!! $pool->contain2 !!}
                                    </p>
                                  </div>
                                
                              </article>
                            </div>
                          </div>
                        </div>
                      </section>    
                  </div>
                 
                </div>
                @endforeach
                <!-- Tennis-->
                
                <!-- Table tennis-->
                
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- All Sports-->
    
      <!-- Page Footer-->
    @endsection
    @section('js')
    <script>
       $(document).ready(function(){
        // $('.tab2').css('display','none');
        $('.tab').on('click',function(){
          var name=$(this).data('name');
          $('.name').html(name);
        });
        
       });
    </script>
    @endsection