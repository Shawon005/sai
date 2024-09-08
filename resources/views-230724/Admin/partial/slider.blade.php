<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            @php $user=users(); @endphp
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="up">
                        <li class="user-profile"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="{{table('admin','id',session('id'),'profile_image')}}" alt="user" /><span class="hide-menu">{{table('admin','id',session('id'),'name')}} </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.profile')}}">My Profile </a></li>
                                <li><a href="{{route('password')}}">Change Password</a></li>
                                <li><a href="{{route('admin.logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">CMS</li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.dashbord')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a> 
                        <!-- <span class="label label-rouded label-themecolor pull-right">4</span> -->
                           
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Homepage</span></a>
                           
                        </li> -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">STARTSIDA</span></a>
                            <ul aria-expanded="false" class="collapse up">
                                <li><a href="{{route('admin.slider.index')}}">Slider </a></li>
                                <li><a href="{{route('admin.link.index')}}">länkar</a></li>
                                <li><a href="{{route('admin.client.index')}}">PARTNERS</a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-microsoft"></i><span class="hide-menu">MENY UI</span></a>
                            <ul aria-expanded="false" class="collapse up">
                                <li><a href="{{route('admin.table.index')}}">TABLÅ</a></li>
                                <li><a href="{{route('admin.blog.index')}}">OM VÅR MEDIA</a></li>
                                <li><a href="{{route('admin.news.index')}}">Nyheter</a></li>
                                <li><a href="{{route('admin.news_category.index')}}">Nyheter Kategori </a></li>
                                <li><a href="{{route('admin.spelansvar.index')}}">Page Contain</a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-playstation"></i><span class="hide-menu">Spela med oss</span></a>
                            <ul aria-expanded="false" class="collapse up">
                                <li><a href="{{route('admin.andelar.index')}}">Andelar </a></li>
                                <li><a href="{{route('admin.poolspel.index')}}">Poolspel guide</a></li>
                                <li><a href="{{route('admin.match.index')}}">POOLSPEL ANALYS</a></li>
                                <li><a href="{{route('admin.category.index')}}">POOLSPEL ANALYS Kategori </a></li>
                                <li><a href="{{route('admin.ads.index')}}">POOLSPEL ANALYS Reklam </a></li>
                                <li><a href="{{route('admin.match2.index')}}">Speltips</a></li>
                                <li><a href="{{route('admin.tipspel.index')}}">SPELTRUPPEN</a></li>
                                <li><a href="{{route('admin.game.index')}}">Game Type </a></li>
                            </ul>
                        </li> 
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.activices.index')}}" aria-expanded="false"><i class="mdi mdi-folder-multiple"></i><span class="hide-menu">Aktiviteter </span></a>
                           
                           </li>
                           <li> <a class=" waves-effect waves-dark" href="{{route('admin.user.index')}}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">User </span></a>
                           
                        </li>   
                                
                                <!-- <li><a href="{{route('admin.activices.index')}}">Aktiviteter</a></li> -->
                                <!-- <li><a href="{{route('admin.speltip.index')}}">Speltips FAQ </a></li> -->
                                
                                
                                
                                
                                <!-- <li><a href="{{route('admin.faq.index')}}">Faq</a></li> -->
                                
                                <!-- <li><a href="{{route('admin.user.index')}}">User </a></li> -->
                                
                               
                                
                                
                         
                        <!-- <li> <a class=" waves-effect waves-dark" href="{{route('admin.news.index')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">News</a>
                           
                          
                        </li> -->
                        <!-- <li> <a class=" waves-effect waves-dark" href="{{route('admin.ads.index')}}" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Ads</span></a>
                           
                           
                           </li> -->
                        <!-- <li> <a class=" waves-effect waves-dark" href="{{route('admin.review.index')}}" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">review</span></a>
                           
                           
                        </li> -->
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.setting.index')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a>
                           
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.logout')}}" aria-expanded="false"><i class="mdi mdi-lock"></i><span class="hide-menu">Logout</span></a>
                           
                        </li>   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>