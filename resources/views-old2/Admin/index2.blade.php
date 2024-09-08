
@extends('Admin.layout.master')
  @section('content')
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <!-- <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div> -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Stats box -->
            <!-- ============================================================== -->
            <div class="row">
                <!--<div class="col-lg-3">-->
                <!--    <div class="card">-->
                <!--        <div class="card-body">-->
                <!--            <div class="d-flex no-block">-->
                <!--                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/income.png" alt="Income" /></div>-->
                <!--                <div class="align-self-center">-->
                <!--                    <h6 class="text-muted m-t-10 m-b-0">Total User</h6>-->
                <!--                    <h2 class="m-t-0">95</h2></div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/expense.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Blog</h6>
                                    <h2 class="m-t-0">{{count($blogs)}}</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/assets.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total News</h6>
                                    <h2 class="m-t-0">{{count($news)}}</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="../assets/images/icon/staff.png" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Speltrupen</h6>
                                    <h2 class="m-t-0">{{count($spel)}}</h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">News</h1>
                                    <!--<h6 class="text-white">Twitter Followers</h6>-->
                                    <a href="{{route('admin.news.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fas fa-newspaper display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">TABLÅ</h1>
                                    <!--<h6 class="text-white">Facebook Likes</h6>-->
                                    <a href="{{route('admin.table.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fas fa-table display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">OM VÅR MEDIA</h1>
                                    <!--<h6 class="text-white">Subscribe</h6>-->
                                    <a href="{{route('admin.blog.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fab fa-blogger display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">Speltips</h1>
                                    <!--<h6 class="text-white">Twitter Followers</h6>-->
                                    <a href="{{route('admin.speltip.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fas fa-newspaper display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">Andelar</h1>
                                    <!--<h6 class="text-white">Facebook Likes</h6>-->
                                    <a href="{{route('admin.andelar.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fas fa-table display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">Tipspel</h1>
                                    <!--<h6 class="text-white">Subscribe</h6>-->
                                    <a href="{{route('admin.tipspel.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fab fa-blogger display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">Match/Event</h1>
                                    <!--<h6 class="text-white">Twitter Followers</h6>-->
                                    <a href="{{route('admin.match.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fas fa-newspaper display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">Faq</h1>
                                    <!--<h6 class="text-white">Facebook Likes</h6>-->
                                    <a href="{{route('admin.faq.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fas fa-table display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">Poolspel</h1>
                                    <!--<h6 class="text-white">Subscribe</h6>-->
                                    <a href="{{route('admin.poolspel.index')}}" class="btn btn-rounded btn-outline btn-light m-t-10 font-14">View list</a>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fab fa-blogger display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales overview chart -->
             <!-- outer part start -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
  @endsection      
 