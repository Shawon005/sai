@extends('frontend.layout.master')
  @section('content') 
  @php $setting=setting(); @endphp
     <section class="section section-sm bg-gray-100">
        <div class="">
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
        <div class="">
          <div class="row row-30">
            <div class="col-lg-12">
              
              <!-- Post Miranda-->
              <article class="post-miranda">
                <!-- <div class="post-miranda-content"> -->
                  <img src="{{$setting->sub_bannar}}" alt="" width="100%" height="397"/>
                <!-- </div> -->
                
              </article>

            </div>
            
          </div>
        </div>
    </section>
    <section class="section section-sm bg-gray-100">
        <div class="text-center p-3">
            @foreach($pools as $pool)
            <img src="{{$pool->tab_image}}" class="m-3" width="60px"  alt="">
            @endforeach
        </div>
    </section>
     <section class="section section-sm bg-gray-100">
       <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="card-details">
                <a href="" class="text-white">
                <div class="mb-2" style="background-color:#242222">
                    <i class="fa-light fa fa-users m-2"></i>Livestrem
                </div>
                </a>
                <a href=""class="text-white">
                <div class="mb-2" style="background-color:#242222">
                    <i class="fa-light fa fa-play-circle m-2"></i>Guide
                </div>
                </a>
            </div>
            <div class="card-details mt-3">
                <div class="mb-2 p-2 text-center text-white" style="background-color:#242222">
                   Andelar
                </div>
                <div class="mini-card me-3 ">
                    <div class="custom" > <a href="{{$setting->sub_bannar_link}}"><img src="{{$setting->sub_bannar}}" alt="" class="rounded-3" width="100%" style="min-height:110px" /></a></div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                        @foreach($andelars as $id=>$andelar)
                            <div class="carousel-item {{($id==0)?'active':''}}">
                                @php $sub=andelar($andelar->id); @endphp
                                @foreach($sub as $sub_andelar)
                                <div class="row  custom" style="margin-top: 5px !important; background-color: {{$sub_andelar->color}}; ">
                                <div class="col-md-4 ">
                                    <img src="{{$sub_andelar->image}}" alt="" class="custom-img">
                                </div>
                                    
                                    <div class="col-md-8"><a href="{{$sub_andelar->link}}" style="color:white"><p>{{$sub_andelar->title}} </p></a></div>
                                
                                </div>
                                @endforeach
                                </div>
                                @endforeach
                            <!-- <div class="carousel-item">
                                <div class="row  custom " style="margin-top: 5px !important; background-color: #718fa3;">
                                    <div class="col-md-4 ">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-md-8"><p class="andela-text">Gigantens The Big One 400kr</p></div>
                                </div>

                                <div class="row  custom" style="margin-top: 5px !important; background-color: #718fa3;">
                                    <div class="col-md-4 ">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-md-8"><p class="andela-text">Gigantens The Big One 400kr</p></div>
                                </div>
                                <div class="row  custom" style="margin-top: 5px !important; background-color: #718fa3;">
                                    <div class="col-md-4 ">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-md-8"><p class="andela-text">Gigantens The Big One 400kr</p></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row  custom " style="margin-top: 5px !important; background-color: #718fa3;">
                                    <div class="col-md-4 ">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-md-8"><p class="andela-text">Gigantens The Big One 400kr</p></div>
                                </div>

                                <div class="row  custom" style="margin-top: 5px !important; background-color: #718fa3;">
                                    <div class="col-md-4 ">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-md-8"><p class="andela-text">Gigantens The Big One 400kr</p></div>
                                </div>
                                <div class="row  custom" style="margin-top: 5px !important; background-color: #718fa3;">
                                    <div class="col-md-4 ">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-md-8"><p class="andela-text">Gigantens The Big One 400kr</p></div>
                                </div>
                            </div> -->
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>  
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12col-sm-12">
            <div class="card-details">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row p-2 mb-3"style="background-color: #64B000;;">
                                    <div class="col-4">
                                        <img src="{{$setting->sub_bannar}}" alt="" class="custom-img">
                                    </div>
                                    <div class="col-8">
                                        <p class="text-white">Spelstopp: Onsdag 20:44 | Omsättning: 143 026:-</p>
                                    </div>
                                </div>
                                <div class="text-center p-2" ><span class="fa fa-search"style="background-color: #000;"> Läs vår analys</span></div>
                                <div class="text-center mb-2">
                                    <button class="btn btn0 text-white"style="background-color:#64B000;"><i class="fa fa-check btnt0" role="presentation" aria-label="check icon"></i> Utgångsrader</button> 
                                    <button class="btn btn1 text-white" style="background-color:#d1681d"><i class="fa fa-check btnt1" role="presentation" aria-label="check icon"></i> dorange</button> 
                                    <button class="btn btn2 text-white" style="background-color:#ad21db;"><i class="fa fa-check btnt2" role="presentation" aria-label="check icon"></i> lila</button> 
                                    <button class="btn btn3 text-white" style="background-color:#a8100d"><i class="fa fa-check btnt3" role="presentation" aria-label="check icon"></i> röd</button> 
                                    <button class="btn btn4 text-white" style="background-color:#166ac9"><i class="fa fa-check btnt4" role="presentation" aria-label="check icon"></i> blå</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="div-1 mb-2">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table-dark ">
                                            <th>Match</th>
                                            <th class="th1">1</th>
                                            <th class="th2">X</th>
                                            <th class="th3">2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $id=> $matchs)
                                        <tr>
                                            <td class="table-dark ">
                                                <div class="row">
                                                    <div class="col-10" style="margin-right: -10px;">
                                                        {{$id+1}}. {{$matchs['description']}} <br><span>{{dateFormatconverter($matchs['distribution']['date'])}}</span>
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{asset('')}}frontend/images/inc.png" style="min-width:20px" alt="" >
                                                    </div>
                                                </div>
                                                </td>
                                            @if($matchs['odds']!=null) 
                                            @if($matchs['randomResultProbability']!=null)
                                            <td class="val val1" id="val1s{{$id}}" data-id="#val1s{{$id}}">{{$matchs['randomResultProbability']['home']}}% <br>{{$matchs['odds']['home']}}</td>
                                            <td  class="val val2" id="val2s{{$id}}" data-id="#val2s{{$id}}">{{$matchs['randomResultProbability']['draw']}}% <br>{{$matchs['odds']['draw']}}</td>
                                            <td  class="val val3" id="val3s{{$id}}" data-id="#val3s{{$id}}">{{$matchs['randomResultProbability']['away']}}% <br>{{$matchs['odds']['away']}}</td>
                                            @endif
                                            @endif
                                        
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                    <!-- <ul class="list-group">
                                    
                                    <li class="list-group-item">
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
                                    </li>
                                    </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                      <div class="div-3 mx-2">
                        
                      </div>
                    </div>
                    <div class="col-12 d-grid">
                      <button class="submit-button" type="button">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="card-details">
            <div style="background-color: #393b3d;"class="p-2 mb-2">
                    <p class="text-white">Faktor <span class="icon icon-corporate1 fa fa-info" title="Lorem, ipsum dolor sit amet  animi? Officiis accusamus numquam eos totam sit?"></span></p>

                </div>
                <div style="background-color: #d1681d;"class="p-2 mb-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input Filtrera" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                        <label class="text" for="flexSwitchCheckChecked">Filtrera efter antal tecken</label> <span class="icon icon-corporate1 fa fa-info" title="Lorem, ipsum dolor sit amet  animi? Officiis accusamus numquam eos totam sit?"></span>

                       
                        <div id="manu">
                        <h6>Hur många av varje tecken får vara med i samma rad?</h6>
                            <div class="row">
                                <div class="col-2">
                                    <h4 class="mt-4">1</h4>
                                </div>
                                <div class="col-3"> 
                                    <label>Min</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                                <div class="col-3"> 
                                    <label>Max</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row"style="margin-top: 20px !important;">
                                <div class="col-2">
                                    <h4 class="mt-4">X</h4>
                                </div>
                                <div class="col-3"> 
                                    <label>Min</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                                <div class="col-3"> 
                                    <label>Max</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row"style="margin-top: 20px !important;">
                                <div class="col-2">
                                    <h4 class="mt-4">2</h4>
                                </div>
                                <div class="col-3"> 
                                    <label>Min</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                                <div class="col-3"> 
                                    <label>Max</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div style="background-color: #ad21db;"class="p-2 mb-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input efter" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                        <label class="text" for="flexSwitchCheckChecked">Filtrera efter antal tecken</label> <span class="icon icon-corporate1 fa fa-info" title="Lorem, ipsum dolor sit amet  animi? Officiis accusamus numquam eos totam sit?"></span>

                        <div id="efter">
                            <div class="row">
                                <div class="col-2">
                                    <h4 class="mt-4">1</h4>
                                </div>
                                <div class="col-3"> 
                                    <label>Min</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                                <div class="col-3"> 
                                    <label>Max</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: #a8100d;"class="p-2 mb-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input antal" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                        <label class="text" for="flexSwitchCheckChecked">Filtrera efter antal tecken</label> <span class="icon icon-corporate1 fa fa-info" title="Lorem, ipsum dolor sit amet  animi? Officiis accusamus numquam eos totam sit?"></span>
                    </div>
                    <div id="antal">
                            <div class="row">
                                <div class="col-2">
                                    <h4 class="mt-4">1</h4>
                                </div>
                                <div class="col-3"> 
                                    <label>Min</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                                <div class="col-3"> 
                                    <label>Max</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div style="background-color: #166ac9;"class="p-2 mb-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input manga" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                        <label class="text" for="flexSwitchCheckChecked">Filtrera efter antal tecken</label> <span class="icon icon-corporate1 fa fa-info" title="Lorem, ipsum dolor sit amet  animi? Officiis accusamus numquam eos totam sit?"></span>
                        <br>
                        <h6>Hur många av varje tecken får vara med i samma rad?</h6>
                        <div id="manga">
                            <div class="row">
                                <div class="col-2">
                                    <h4 class="mt-4">1</h4>
                                </div>
                                <div class="col-3"> 
                                    <label>Min</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                                <div class="col-3"> 
                                    <label>Max</label><br>
                                    <select class="js-example-placeholder-multiple col-sm-12"name="category_id">
                                        <option value="1">A</option>
                                        <option value="1">B</option>
                                        <option value="1">C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                       
                </div>
            </div>
            <div style="background-color: #393b3d;"class="p-4 m-2 rounded-3">
            <span class="icon icon-corporate1 fa fa-info" title="Lorem, ipsum dolor sit amet  animi? Officiis accusamus numquam eos totam sit?"></span>
                <div class="row" class="text-center">
                    <div class="col-6">
                        <span class="text-center">Omsättning</span>
                        <input type="text"value="345660 kr"readonly class="form-control col-from">
                       
                    </div>
                    <div class="col-6">
                        <span class="text-center">Jackpot</span>
                        <input type="text"value="0 kr"readonly class="form-control col-from">
                    </div>
                </div>
            </div>
            <div style="background-color: #393b3d;"class="p-4 m-2 rounded-3">
                <div class="form-check form-switch">
                    <input class="form-check-input col-from" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label for="flexSwitchCheckChecked">Filtrera efter antal 1X2</label>
                </div>
                <div class="row" class="text-center">
                    <div class="col-4">
                        <span class="text-center">Omsättning</span><br>
                        <select name="" id=""class=" col-from me-2"style="line-height: 0.3; width:40px">
                            <option value="" seletecd>12</option>
                            <option value="">34</option>
                            <option value="">45</option>
                        </select>
                        <select name="" id=""class="col-from me-2"style="line-height: 0.3; width:40px">
                            <option value="" seletecd>12</option>
                            <option value="">34</option>
                            <option value="">45</option>
                        </select>
                    </div>
                    
                    <div class="col-4">
                        <span class="text-center">Jackpotas</span><br>
                        <select name="" id=""class=" me-2"style="line-height: 0.3; width:40px">
                            <option value="" seletecd>12</option>
                            <option value="">34</option>
                            <option value="">45</option>
                        </select>
                        <select name="" id=""cclass=" me-2"style="line-height: 0.3; width:40px">
                            <option value="" seletecd>12</option>
                            <option value="">34</option>
                            <option value="">45</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <span class="text-center">Jackpotsaas</span><br>
                        <select name="" id=""class=" me-2"style="line-height: 0.3; width:40px">
                            <option value="" seletecd>12</option>
                            <option value="">34</option>
                            <option value="">45</option>
                        </select>
                        <select name="" id=""class=" me-2"style="line-height: 0.3; width:40px">
                            <option value="" seletecd>12</option>
                            <option value="">34</option>
                            <option value="">45</option>
                        </select>
                    </div>
                </div>
            </div>
            <div style="background-color: #393b3d;"class="p-4 m-2 rounded-3">
                <div class="form-check form-switch">
                    <input class="form-check-input col-from " type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label for="flexSwitchCheckChecked">Filtrera efter antal 1X2</label>
                </div>
                <div class="row" class="text-center">
                    <div class="col-6">
                        <span class="text-center">Omsättning</span>
                        <input type="text"value="345660 kr"readonly class="form-control col-from ">
                       
                    </div>
                    <div class="col-6">
                        <span class="text-center">Jackpot</span>
                        <input type="text"value="0 kr"readonly class="form-control col-from ">
                    </div>
                </div>
            </div>
           
            <div style="background-color: #393b3d;"class="p-2 m-2 rounded-3">
                <div class="form-check form-switch">
                    <input class="form-check-input col-from " type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label for="flexSwitchCheckChecked">Filtrera efter antal 1X2</label>
                </div>
            </div>
            <div style="background-color: #393b3d;"class="p-2 m-2 rounded-3">
                <div class="form-check form-switch">
                  
                    <span for="flexSwitchCheckChecked">Filtrera efter antal 1X2</span>
                </div>
            </div>
            <div style="background-color: #393b3d;"class="p-2 m-2 rounded-3">
                <div class="form-check form-switch">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" data-bs-toggle="collapse" href="#multiCollapseExample1">Active</a>
                        </li>
                    </ul>   
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div> 
                </div>
            </div>
        </div>
         
     </section>
     <section class="section section-sm bg-gray-100">
        <div style="background-color: #393b3d;"class="p-2 m-2 rounded-3">
            <div class="text-white">
                <div class="row">
                    <div class="col-2">
                        <div class="row">
                            <div class="col-8">
                                <div>OREDUCERAT</div>
                                <div>Rader: 209952</div>
                                <div>Pris: 209952 kr</div>
                            </div>
                            <div class="col-2">
                                <h2 style="color:#64B000;"> > </h2>
                            </div>
                        </div>  
                    </div>

                   
                    <div class="col-4">
                        <div>REDUCERAT</div>
                        <div>Rader: 209952</div>
                        <div>Pris: 116640 kr efter 44% reducering (-93312 kr)</div>
                    </div>
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-2">

                            </div>
                            <div class="col-5">
                            <span class="btn"style="max-height:100px"><small><img src="{{asset('')}}storage/uploads/23/05/1684301950v2hviCO437GEz2cyd9VW.svg" alt="" width="40px">SKICKA SYSTEMTILL LIVERÄTTNIN</small></span> 
                            </div>
                            <div class="col-5">
                            <span class="btn"style="background:red; min-height:70px"><small><img src="{{asset('')}}storage/uploads/23/05/1684301950v2hviCO437GEz2cyd9VW.svg" alt="" width="40px">LÄMNA IN SYSTEM</small></span><br>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                
            </div>
        </div>
     </section>
  @endsection
  @section('js')
  <script>
      $(document).ready(function(){
        $('#manu').hide();
        $('#manga').hide();
        $('#efter').hide();
        $('#antal').hide();
        $('.btn1').hide();
        $('.btn2').hide();
        $('.btn3').hide();
        $('.btn4').hide();
        // $('.btnt0').hide();
        $('.btnt1').hide();
        $('.btnt2').hide();
        $('.btnt3').hide();
        $('.btnt4').hide();
        var color='#64B000';
        $('.btn0').on('click',function(){
            color='#64B000';
            $('.btnt0').show();
            $('.btnt1').hide();
            $('.btnt2').hide();
            $('.btnt3').hide();
            $('.btnt4').hide();
        });
        $('.btn1').on('click',function(){
            color='#d1681d';
            $('.btnt1').show();
            $('.btnt0').hide();
            $('.btnt2').hide();
            $('.btnt3').hide();
            $('.btnt4').hide();
        });
        $('.btn2').on('click',function(){
            color='#ad21db';
            $('.btnt2').show();
            $('.btnt0').hide();
            $('.btnt1').hide();
            $('.btnt3').hide();
            $('.btnt4').hide();
        });
        $('.btn3').on('click',function(){
            color='#a8100d';
            $('.btnt3').show();
            $('.btnt0').hide();
            $('.btnt1').hide();
            $('.btnt2').hide();
            $('.btnt4').hide();
        });
        $('.btn4').on('click',function(){
            color='#166ac9';
            $('.btnt4').show();
            $('.btnt0').hide();
            $('.btnt1').hide();
            $('.btnt2').hide();
            $('.btnt3').hide();
        });
        
        $('.Filtrera').on('click',function(){
            if($(this).prop("checked") == true){
                $('#manu').show();
                $('.btn1').show();
            }
            else{
                $('#manu').hide();
                $('.btn1').hide();
            }
        });
        $('.manga').on('click',function(){
            
            if($(this).prop("checked") == true){
                $('#manga').show();
                $('.btn4').show();
            }
            else{
                $('#manga').hide();
                $('.btn4').hide();
            }
        });
        $('.efter').on('click',function(){
            
            if($(this).prop("checked") == true){
                $('#efter').show();
                $('.btn2').show();
                
            }
            else{
                $('#efter').hide();
                $('.btn2').hide();
            }
        });
        $('.antal').on('click',function(){
            
            if($(this).prop("checked") == true){
                $('#anta').show();
                $('.btn3').show();
            }
            else{
                $('#antal').hide();
                $('.btn3').hide();
            }
        });
        // $('.val').hover(function(){
        //     var id=$(this).data('id');
        //     $(id).css("border","solid 2px black");
        //     },function(){
        //     $(this).css("border", "");
        // });
       
        $('.val').on('click',function(){

            var id=$(this).data('id');
            if($(id).css('border')!='')
            {
                $(id).css({"background-color":"","border":"","color":""});
            }
            else{
            $(id).css({"background-color":color,"border":"solid 2px black","color":"white"});
            }
        });
        $('.th1').on('click',function(){
            if($('.val1').css('border')!='')
            {
                $('.val1').css({"background-color":"","border":"","color":""});
            }
            else{
            $('.val1').css({"background-color":color,"border":"solid 2px black","color":"white"});
            }
        });
        $('.th2').on('click',function(){
            if($('.val2').css('border')!='')
            {
                $('.val2').css({"background-color":"","border":"","color":""});
            }
            else{
            $('.val2').css({"background-color":color,"border":"solid 2px black","color":"white"});
            }
            
        });
        $('.th3').on('click',function(){
            if($('.val3').css('border')!='')
            {
                $('.val3').css({"background-color":"","border":"","color":""});
            }
            else{
            $('.val3').css({"background-color":color,"border":"solid 2px black","color":"white"});
            }
        });
      });
  </script>
  @endsection