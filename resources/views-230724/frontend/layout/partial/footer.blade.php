
     <footer class="section footer-classic footer-classic-dark">
        <div class="footer-classic-main">
          <div class="container">
            <div class="row row-30 ">
              <div class="col-lg-3">
                <p class="heading-7" style="font-weight:700"> Studio All In
                 </p>
                <ul class="list-unstyled">
                  <li><a target="_blank" href="{{$setting->pt1_option1_link}}">{{$setting->pt1_option1_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt1_option2_link}}">{{$setting->pt1_option2_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt1_option3_link}}">{{$setting->pt1_option3_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt1_option4_link}}">{{$setting->pt1_option4_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt1_option5_link}}">{{$setting->pt1_option5_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt1_option6_link}}">{{$setting->pt1_option6_text}}</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <p class="heading-7" style="font-weight:700">Spel</p>
                <ul class="list-unstyled">
                  <li><a target="_blank" href="{{$setting->pt2_option1_link}}">{{$setting->pt2_option1_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt2_option2_link}}">{{$setting->pt2_option2_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt2_option3_link}}">{{$setting->pt2_option3_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt2_option4_link}}">{{$setting->pt2_option4_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt2_option5_link}}">{{$setting->pt2_option5_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt2_option6_link}}">{{$setting->pt2_option6_text}}</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <p class="heading-7" style="font-weight:700">MEDIA</p>
                <ul class="list-unstyled">
                <li><a class="icon icon-corporate fa fa-youtube" target="_blank" href="{{$setting->youtube}}"><span class="text-new"> Youtube </span></a></li>
                  <li><a class="icon icon-corporate fa fa-twitch" target="_blank" href="{{$setting->twich}}"><span class="text-new"> Twich</span></a></li>
                  <li><a class="icon icon-corporate fa fa-twitter" target="_blank" href="{{$setting->twitter}}"><span class="text-new"> Twitter </span></a></li>
                  <li><a class="icon icon-corporate fa fa-facebook" target="_blank" href="{{$setting->facebook}}"><span class="text-new"> Facebook </span></a></li>
                  <!-- <li><a class="icon icon-corporate fa fa-google-plus" target="_blank" href="{{$setting->twich}}"><span> Google Plus </span></a></li> -->
                  <li><a class="icon icon-corporate fa fa-instagram" target="_blank" href="{{$setting->instragram}}"><span class="text-new"> Instagram </span></a></li>
                  
                </ul>
              </div>
              <div class="col-lg-3">
                <p class="heading-7" style="font-weight:700">VILLKOR OCH INTEGRITET</p>
                <ul class="list-unstyled">
                  <li><a target="_blank" href="{{$setting->pt3_option1_link}}">{{$setting->pt3_option1_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt3_option2_link}}">{{$setting->pt3_option2_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt3_option3_link}}">{{$setting->pt3_option3_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt3_option4_link}}">{{$setting->pt3_option4_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt3_option5_link}}">{{$setting->pt3_option5_text}}</a></li>
                  <li><a target="_blank" href="{{$setting->pt3_option6_link}}">{{$setting->pt3_option6_text}}</a></li>
                </ul>
              </div>
            </div>
            <div class="row row-30">
              <div class="col-lg-12 text-center">
                <a class="brand logo" target="_blank" href="{{route('home.index')}}">
                  <img class="brand-logo-dark" src="{{asset('')}}frontend/images/logo-icon.png" alt="" width="210" height="41"/>
                  <img class="brand-logo-light" src="{{$setting->header_logo}}" alt="" width="210" height="41"/>
                </a>
                
                <p class="">{{$setting->footer_text1}} </p>
                <!--<article>-->
                <!--  <div class="container text-center">-->
                <!--    <div class="row" style="border-bottom:none; margin-left: 10%;">-->
                <!--        <div class="col-lg-4 col-sm-12 company-logos logos">-->
                <!--            <img src="{{$setting->footer_image1}}" alt="alibaba"style="width: 50%;height: 42px;"  >-->
                <!--        </div>-->
                <!--        <div class="col-lg-4 col-sm-12company-logos logos" >-->
                <!--            <img src="{{$setting->footer_image2}}" alt="alibaba"style="width: 50%;height: 42px;">-->
                <!--        </div>-->
                <!--        <div class="col-lg-4 col-sm-12 company-logos logos">-->
                <!--            <img src="{{$setting->footer_image3}}" alt="alibaba"style="width: 50%;height: 42px;"  >-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                
                <!--</article>-->
                <!-- @php $clients=clients(); @endphp
                <article class="">
                  @foreach($clients as $client)
                    <a href="{{$client->link}}"><img src="{{$client->image}}" alt="alibaba" class="logos" width="200px" height="100px"></a>
                  @endforeach
                </article> -->
              </div>              
            </div>
             <div class="row">
                <article class="mb-4">
                  <div class="container text-center">
                    <div class="row" style="border-bottom:none; margin-left: 10%;">
                      <div class="col-lg-4 col-sm-12 company-logos logos">
                        <img src="{{$setting->footer_image1}}" alt="alibaba"style="width: 50%;height: 42px;"  >
                        </div>
                        <div class="col-lg-4 col-sm-12company-logos logos" >
                        <img src="{{$setting->footer_image2}}" alt="alibaba"style="width: 50%;height: 42px;">
                        </div>
                        <div class="col-lg-4 col-sm-12 company-logos logos">
                        <img src="{{$setting->footer_image3}}" alt="alibaba"style="width: 50%;height: 42px;"  >
                        </div>
                        <!-- <div class="col-lg-3 col-sm-12 company-logos">
                        <img src="{{$setting->footer_image4}}" alt="alibaba" class="logos" >
                        </div> -->
                        <!-- <img src="{{$setting->footer_image2}}" alt="alibaba" class="logos">
                        <img src="{{$setting->footer_image3}}" alt="alibaba" class="logos" >
                        <img src="{{$setting->footer_image4}}" alt="alibaba" class="logos" > -->
                      </div>
                    </div>
                  </div>
                </article>
            </div>
          </div>
        </div>
       
       
        <div class="footer-classic-aside footer-classic-darken">
          <div class="container">
            
            <div class="">
              <div class="" style="color: #efefef;">
                <p style="text-align: justify;">{{$setting->footer_text2}} </p>
                <p class="" style="color: #efefef;">
                  <a class="link-underline"  href="{{route('home.index')}}"style="color:#fff"> STUDIO ALL IN</a>
                  <span class="copyright-year"></span>
                  <span>&nbsp;&copy;&nbsp<span>&nbsp;</span></span>
                  <!--  -->
                  <span>{{$setting->copy_right}}.</span>
                </p>
              </div>
            </div>
            <!-- <div class="layout-justify">
              

              <p class="rights">
                
                
                <span>&nbsp;&copy;&nbsp;</span>
                <span class="copyright-year"></span>
                
                <a class="link-underline" target="_blank" href="#">STUDIO ALL IN</a>
                <span>.&nbsp;</span>
                <span>All right reserved.</span>
              </p>
              <nav class="nav-minimal">
                <ul class="nav-minimal-list">
                  <li class="active"><a target="_blank" href="index.html">Sports</a></li>
                  <li><a target="_blank" href="in-play.html">In-play</a></li>
                  <li><a target="_blank" href="promotions.html">Promotions</a></li>
                  <li><a target="_blank" href="statistics.html">Statistics</a></li>
                  <li><a target="_blank" href="#">Pages</a></li>
                </ul>
              </nav>
            </div> -->
          </div>
        </div>
      </footer>
      