@extends('frontend.layout.master')
  @section('content') 
      
      <!-- Page Header-->
      <!-- Swiper-->
   
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
            <h3>SPELTIPS</h3>
      </div>
      <section class="section section-sm bg-gray-100">
        <div class="container">
          <div class="row row-30">
          @foreach($matchspel as $match)
            <div class="col-lg-6 ">  
               
              <article class="card-details2 table_body" style="border: unset;">
              
                <h5 class="post-miranda-title blog_title text-center" style="background-color: unset; color: #2d2b2b; padding-top: 15px;"><a href="{{route('home.speltips_details',$match->id)}}">{{$match->name}}</a></h5>
                <a href="{{route('home.speltips_details',$match->id)}}">
                <div class="row " style="margin-top:-5px; padding:20px; min-height: 280px;">
                  <div class="col-lg-4">
                    <div class="post-miranda-aside"><img src="{{$match->image}}" alt=""  style="height: 150px;" class="speltip_img rounded-circle"/></div>
                  </div>
                  <div class="col-lg-8" >
                   
                    <img src="{{$setting->sub_bannar}}" alt="" style="height:90px; margin-top: 5px;" height="397"/>
                   
                    <div class="post-miranda-text clr-7 mt-3">
                      <p>{{ Str::limit(strip_tags($match->details),250) }}</p>
                    </div>
                  </div>
                </div>
                </a>
              </article> 
            
            </div>
            @endforeach
         
          </div>
          
        </div>
        <div class="mt-5">
        {{$matchspel->links()}}
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


      <!-- Page Footer-->
  @endsection