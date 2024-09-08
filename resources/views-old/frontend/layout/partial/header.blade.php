      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel-inner container">
                <div class="rd-navbar-panel-item rd-navbar-panel-item-left">
                  <ul class="list-inline list-inline-sm">
                    <li class="{{ Request::is('about*') ? 'active' : '' }}"><a class="link link-classic " href="{{route('home.about')}}">OM OSS</a></li>
                    <!-- <li><a class="link link-classic" href="news.html">News</a></li> -->
                    <li class="{{ Request::is('contact*') ? 'active' : '' }}"><a class="link link-classic " href="{{route('home.contact')}}">KONTAKT/ANNONSERA</a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-right">
                  <ul class="list-inline list-inline-bordered social-links">
                    <!-- <li>
                      
                      <select class="select select-inline select-inline-dark" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown select-inline-dropdown-secondary">
                        <option value="en" selected="">en</option>
                        <option value="fr">fr</option>
                        <option value="es">es</option>
                      </select>
                    </li> -->
                    <!-- <li><a class="badge badge-primary" href="#">registration</a></li>
                    <li><a class="link link-icon link-icon-left link-classic" href="login-page.html"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Your Account</span></a></li> -->
                    <li><a class="icon icon-corporate text-white fa fa-facebook " href="{{$setting->facebook}}" target="_blank"></a></li>
                    <li><a class="icon icon-corporate text-white fa fa-twitter" target="_blank" href="{{$setting->twitter}}"></a></li>
                    <li><a class="icon icon-corporate text-white fa fa-twitch" target="_blank" href="{{$setting->twich}}"></a></li>
                    <li><a class="icon icon-corporate text-white fa fa-instagram" target="_blank" href="{{$setting->instragram}}"></a></li>
                    <li><a class="icon icon-corporate text-white fa fa-linkedin" target="_blank" href="{{$setting->youtube}}"></a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-main">
              <div class="rd-navbar-main-top">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!-- Brand-->
                    <a class="brand logo" href="{{route('home.index')}}">
                      <img class="brand-logo-dark" src="{{$setting->header_logo_b}}" alt="" width="260" height="61"/>
                      <img class="brand-logo-light" src="{{$setting->header_logo}}" alt="" width="260" height="61"/>
                    </a>
                  </div>
                  <!-- RD Navbar Search-->
                  <!-- <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                    </form>
                  </div> -->
                </div>
              </div>
              <div class="rd-navbar-main-bottom rd-navbar-darker">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav"> 
                    <li class="rd-nav-item {{ Request::is('table*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.table')}}">Tablå</a></li>
                    <li class="rd-nav-item {{ Request::is('blogs*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.blogs')}}">OM VÅR MEDIA</a></li>
                    <li class="rd-nav-item {{ Request::is('news*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.news')}}">Nyheter</a></li>
                    <li class="rd-nav-item1"> 
                      <div class="btn-group dropdown1">
                        <a type="button" class="rd-nav-link"  aria-expanded="false">
                        SPELA MED OSS</a>
                        <ul class="dropdown-menu" style="--bs-dropdown-link-active-bg:#64b000;--bs-dropdown-link-hover-bg:#64b000;">
                          <li class="dropdown-item  {{ Request::is('spelansvar*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.spelansvar')}}">Spelansvar</a></li>
                          <li class="dropdown-item {{ Request::is('andelar*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.andelar')}}">Andelar</a></li>
                          <li class="dropdown-item {{ Request::is('poolspel*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.poolspel')}}">Poolspel</a></li>
                          <li class="dropdown-item {{ Request::is('speltip*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.speltip')}}">Speltips</a></li>
                          <!-- <li class="dropdown-item {{ Request::is('about*') ? 'active' : '' }}"><a class="" href="{{route('home.about')}}">Reducera</a></li> -->
                          <li class="dropdown-item {{ Request::is('speltruppen*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.tipspel')}}">Speltruppen</a></li>
                          <!-- <li class="dropdown-item {{ Request::is('faq*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.faq')}}">Faq</a></li> -->
                          <!-- <li class="dropdown-item {{ Request::is('tipspel*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.tipspel')}}">Tipsple</a></li> -->
                          <li class="dropdown-item {{ Request::is('reduce*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.reduce')}}">Reducera</a></li>
                          <li class="dropdown-item  {{ Request::is('Spelregler*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.Spelregler')}}">Spelregler</a></li>
                          <li class="dropdown-item  {{ Request::is('Villkor*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.Villkor')}}">Villkor</a></li>
                          <li class="dropdown-item  {{ Request::is('Integritetspolicy*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.Integritetspolicy')}}">Integritetspolicy</a></li>
                          <li class="dropdown-item  {{ Request::is('Cookie*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.Cookie')}}">Cookie policy</a></li>
                          <li class="dropdown-item  {{ Request::is('Spelmissbruk*') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home.Spelmissbruk')}}">Spelmissbruk</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <!-- Example single danger button -->
                    

                  <!-- <div class="rd-navbar-main-element">
                    <ul class="list-inline list-inline-sm">
                      <li><a class="icon icon-xs fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xs fa fa-instagram" href="#"></a></li>
                    </ul>

                     <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.spelansvar')}}">Spelansvar</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.andelar')}}">Andelar</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.speltip')}}">Speltips</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.poolspel')}}">Poolspel</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.about')}}">Reducera</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.contact')}}">Speltruppen</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.faq')}}">Faq</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('home.tipspel')}}">Tipsple</a></li>
                  </div> -->
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>