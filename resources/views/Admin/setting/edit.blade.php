@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Setting</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Setting</li>
                    <li class="breadcrumb-item active">CMS Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       <h4 class="card-title">Update Site Setting</h4>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="logo-tab" data-toggle="tab" data-target="#logo" type="button" role="tab" aria-controls="logo" aria-selected="true">Header Logo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Social Media</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link " id="contain-tab" data-toggle="tab" data-target="#contain" type="button" role="tab" aria-controls="contain" aria-selected="true">Page Contain</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="footer1-tab" data-toggle="tab" data-target="#footer1" type="button" role="tab" aria-controls="footer1" aria-selected="false">Footer S1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="footer2-tab" data-toggle="tab" data-target="#footer2" type="button" role="tab" aria-controls="footer2" aria-selected="false">Footer S2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="footer3-tab" data-toggle="tab" data-target="#footer3" type="button" role="tab" aria-controls="footer3" aria-selected="false">Footer S3</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="footer4-tab" data-toggle="tab" data-target="#footer4" type="button" role="tab" aria-controls="footer4" aria-selected="false">Footer Text</button>
                            </li>
                             <li class="nav-item" role="presentation">
                                <button class="nav-link" id="info-tab" data-toggle="tab" data-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">General Info</button>
                            </li>
                        </ul>
                            <form class="floating-labels m-t-40" action="{{route('admin.setting.update',$setting->id)}}" method ="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div  class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="logo" role="tabpanel" aria-labelledby="logo-tab">
                                        <div class="form-group m-b-40">
                                         <label for="input-file-now-custom-2">Header Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-22" name="header_logo" class="dropify" data-default-file="{{$setting->header_logo}}" title="Header Logo" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="input-file-now-custom-2">Header Logo Inverse</label><br><br>
                                         <input type="file" id="input-file-now-custom-22" name="header_logo_b" class="dropify" data-default-file="{{$setting->header_logo_b}}" title="Header Logo Inverse" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="input-file-now-custom-2">Fav Logo </label><br><br>
                                         <input type="file" id="input-file-now-custom-22" name="fav_logo" class="dropify" data-default-file="{{$setting->fav_logo}}" title="favicon Logo" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                          <label for="exampleInputuname2">Sub Banner</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="sub_bannar" class="dropify" data-default-file="{{$setting->sub_bannar}}" title="Sub Banner" />  
                                        </div>
                                        <div class="form-group m-b-40">
                                          <label for="exampleInputuname2">Sub Banner Link</label>
                                         <input type="text" class="form-control"id="input-file-now-custom-1" name="sub_bannar_link" value="{{$setting->sub_bannar_link}}" title="Sub Banner" />  
                                        </div>
                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname2">Page Banner</label><br><br>
                                            <input type="file" id="input-file-now-custom-1" name="page_banner" class="dropify" data-default-file="{{$setting->page_banner}}" title="Page Banner" />
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="about_title" value="{{$setting->about_title}}" >
                                            <label for="exampleInputuname1">About Title</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="exampleInputuname2">About Image</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="about_image" class="dropify" data-default-file="{{$setting->about_image}}" />
                                            
                                        </div>  
                                        
                                        <div class="form-group m-b-40">
                                            
                                            <textarea class="form-control" id="mymce" name="about_description" >{{$setting->about_description}}</textarea>
                                            <label for="exampleInputuname1">Description</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <!-- <input type="text" class="form-control" id="exampleInputuname1" name="contain1" value="{{$spela->contain1}}" > -->
                                            <label for="exampleInputuname1">Contain</label><br><br>
                                            <textarea id="mymce1" name="Acontain1">{{$spela->contain1}}</textarea>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <!-- <input type="text" class="form-control" id="exampleInputuname1" name="contain2" value="{{$spela->contain2}}" >
                                            <label for="exampleInputuname1">Contain</label> -->
                                            <label for="exampleInputuname1">Contain</label><br><br>
                                            <textarea id="mymce2" name="Acontain2">{{$spela->contain2}}</textarea>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname2">Contain Image</label><br><br>
                                            <input type="file" id="input-file-now-custom-1" name="Acontain_image" class="dropify" data-default-file="{{$spela->contain_image}}" />  
                                        </div>
                                        <div class="m-b-40">
                                            <input type="checkbox"  name="about_contain_image" class="js-switch" id="switch" data-color="#118a27" data-size="small"  {{($setting->about_contain_image==1)?'checked':''}} /> Contain Image Anable Disable
                                        </div>
                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname2">Banner Image</label><br><br>
                                            <input type="file" id="input-file-now-custom-1" name="Apage_banner" class="dropify" data-default-file="{{$spela->page_banner}}" />
                                        </div> 

                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname1">Banner Text</label><br><br>
                                            <textarea id="mymce4" name="Abanner_text"value="">{{$spela->banner_text}}</textarea>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="Atext_link" value="{{$spela->text_link}}">
                                            <label for="exampleInputuname1">Banner Link</label>
                                        </div>
                                        <div>
                                            <input type="checkbox"  name="Astatus" class="js-switch" id="switch" data-color="#118a27" data-size="small"  {{($spela->btn_status==1)?'checked':''}} /> Button Anable Disable
                                        </div>                                      
                                    </div>
                                    <div class="tab-pane fade show" id="info" role="tabpanel" aria-labelledby="info-tab">
                                        <div class="form-group m-b-40">
                                            <input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" name="api" data-size="small" {{($setting->api==1)?'checked':''}} />
                                            <label for="switch">Match event Api enable disable</label>
                                        </div>      
                                        <div class="form-group m-b-40">
                                            <input type="checkbox"  class="js-switch" id="switch" data-color="#118a27" name="chat_bot" data-size="small" {{($setting->chat_bot==1)?'checked':''}} />
                                            <label for="switch">Chat Bot Api enable disable</label>
                                        </div>                                
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="facebook" value="{{$setting->facebook}}" >
                                            <label for="exampleInputuname1">Facebook</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="twitter" value="{{$setting->twitter}}" >
                                            <label for="exampleInputuname1">Twitter</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="instragram" value="{{$setting->instragram}}" >
                                            <label for="exampleInputuname1">Instragram</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="youtube" value="{{$setting->youtube}}" >
                                            <label for="exampleInputuname1">Youtube</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="twich" value="{{$setting->twich}}" >
                                            <label for="exampleInputuname1">Twitch</label>
                                        </div>
                                    </div>  
                                    <div class="tab-pane fade show " id="contact" role="tabpanel" aria-labelledby="contact-tab"> 
                                        <!-- <div class="form-group m-b-40">
                                            
                                            <input type="tel" class="form-control" id="exampleInputuname1" name="mobile" value="{{$setting->mobile}}" >
                                            <label for="exampleInputuname1">Mobile</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            
                                            <input type="email" class="form-control " id="exampleInputuname2" name="email" value="{{$setting->email}}">
                                            <label for="exampleInputuname2"> Email</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="whatapp"value="{{$setting->whatapp}}" >
                                            <label for="exampleInputuname1">Whatapp</label>
                                        </div> -->
                                        <div class="form-group m-b-40">
                                
                                            <input type="text" class="form-control" id="exampleInputuname1" name="contact_title" value="{{$setting->contact_title}}" >
                                            <label for="exampleInputuname1">Contact Title</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname2">Contact Image</label><br><br>
                                            <input type="file" id="input-file-now-custom-1" name="contact_image" class="dropify" data-default-file="{{$setting->contact_image}}" />
                                            
                                        </div>  
                                        
                                        <div class="form-group m-b-40">
                                            <textarea class="form-control" id="mymce3" name="contact_details" >{{$setting->contact_details}}</textarea>
                                            
                                            <label for="exampleInputuname1">Description</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <!-- <input type="text" class="form-control" id="exampleInputuname1" name="contain1" value="{{$spela->contain1}}" > -->
                                            <label for="exampleInputuname1">Contain</label><br><br>
                                            <textarea id="mymce5" name="Ccontain1">{{$spelaC->contain1}}</textarea>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <!-- <input type="text" class="form-control" id="exampleInputuname1" name="contain2" value="{{$spela->contain2}}" >
                                            <label for="exampleInputuname1">Contain</label> -->
                                            <label for="exampleInputuname1">Contain</label><br><br>
                                            <textarea id="mymce6" name="Ccontain2">{{$spelaC->contain2}}</textarea>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname2">Contact Banner</label><br><br>
                                            <input type="file" id="input-file-now-custom-1" name="Ccontain_image" class="dropify" data-default-file="{{$spelaC->contain_image}}" />
                                        </div> 
                                        <div class="m-b-40">
                                            <input type="checkbox"  name="contact_contain_image" class="js-switch" id="switch" data-color="#118a27" data-size="small"  {{($setting->contact_contain_image==1)?'checked':''}} /> Contain Image Anable Disable
                                        </div>
                                        <!-- <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="contain2" value="{{$spela->contain2}}" >
                                            <label for="exampleInputuname1">Contain</label>
                                        </div> -->
                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname2">Banner Image</label><br><br>
                                            <input type="file" id="input-file-now-custom-1" name="Cpage_banner" class="dropify" data-default-file="{{$spelaC->page_banner}}" />
                                        </div> 

                                        <div class="form-group m-b-40">
                                            <label for="exampleInputuname1">Banner Text</label><br><br>
                                            <textarea id="mymce7" name="Cbanner_text"value="">{{$spelaC->banner_text}}</textarea>
                                        </div>

                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="Ctext_link" value="{{$spelaC->text_link}}">
                                            <label for="exampleInputuname1">Banner Link</label>
                                        </div>
                                        <div>
                                            <input type="checkbox"  name="Cstatus" class="js-switch" id="switch" data-color="#118a27" data-size="small"  {{($spelaC->btn_status==1)?'checked':''}} /> Button Anable Disable
                                        </div>
                                        <!-- <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="contact_title" value="{{$setting->contact_title}}" >
                                            <label for="exampleInputuname1">Contact Title</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                         <label for="exampleInputuname2">Contact Image</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="contact_image" class="dropify" data-default-file="{{$setting->contact_image}}" />
                                            
                                        </div>  
                                        
                                        <div class="form-group m-b-40">
                                            <textarea class="form-control" id="mymce1" name="contact_details" >{{$setting->contact_details}}</textarea>
                                            
                                            <label for="exampleInputuname1">Description</label>
                                        </div>  -->
                                        
                                    </div> 
                                    <!-- <div class="tab-pane fade show " id="contain" role="tabpanel" aria-labelledby="contain-tab"> 
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control" id="exampleInputuname1" name="page_contain1" value="{{$setting->page_contain1}}" >
                                            <label for="exampleInputuname1">Page Contain </label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            
                                            <input type="text" class="form-control " id="exampleInputuname2" name="page_contain2" value="{{$setting->page_contain2}}">
                                            <label for="exampleInputuname2">Page Contain </label>
                                        </div> 
                                       
                                    </div>  -->
                                    <div class="tab-pane fade show " id="footer1" role="tabpanel" aria-labelledby="footer1-tab">
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt1_option1_text" value="{{$setting->pt1_option1_text}}" >
                                            <label for="exampleInputuname1">Option1 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt1_option1_link" value="{{$setting->pt1_option1_link}}">
                                            <label for="exampleInputuname2"> Option1 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt1_option2_text" value="{{$setting->pt1_option2_text }}" >
                                            <label for="exampleInputuname1">Option2 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt1_option2_link" value="{{$setting->pt1_option2_link}}">
                                            <label for="exampleInputuname2"> Option2 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt1_option3_text" value="{{$setting->pt1_option3_text }}" >
                                            <label for="exampleInputuname1">Option3 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt1_option3_link" value="{{$setting->pt1_option3_link}}">
                                            <label for="exampleInputuname2"> Option3 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt1_option4_text" value="{{$setting->pt1_option4_text }}" >
                                            <label for="exampleInputuname1">Option4 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt1_option4_link" value="{{$setting->pt1_option4_link}}">
                                            <label for="exampleInputuname2"> Option4 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt1_option5_text" value="{{$setting->pt1_option5_text }}" >
                                            <label for="exampleInputuname1">Option5 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt1_option5_link" value="{{$setting->pt1_option5_link}}">
                                            <label for="exampleInputuname2"> Option5 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt1_option6_text" value="{{$setting->pt1_option6_text }}" >
                                            <label for="exampleInputuname1">Option6 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt1_option6_link" value="{{$setting->pt1_option6_link}}">
                                            <label for="exampleInputuname2"> Option6 Link</label>
                                        </div> 
                                    </div> 
                                    <div class="tab-pane fade show " id="footer2" role="tabpanel" aria-labelledby="footer2-tab">
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt2_option1_text" value="{{$setting->pt2_option1_text }}" >
                                            <label for="exampleInputuname1">Option1 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt2_option1_link" value="{{$setting->pt2_option1_link}}">
                                            <label for="exampleInputuname2"> Option1 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt2_option2_text" value="{{$setting->pt2_option2_text }}" >
                                            <label for="exampleInputuname1">Option2 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt2_option2_link" value="{{$setting->pt2_option2_link}}">
                                            <label for="exampleInputuname2"> Option2 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt2_option3_text" value="{{$setting->pt2_option3_text }}" >
                                            <label for="exampleInputuname1">Option3 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt2_option3_link" value="{{$setting->pt2_option3_link}}">
                                            <label for="exampleInputuname2"> Option3 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt2_option4_text" value="{{$setting->pt2_option4_text }}" >
                                            <label for="exampleInputuname1">Option4 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt2_option4_link" value="{{$setting->pt2_option4_link}}">
                                            <label for="exampleInputuname2"> Option4 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt2_option5_text" value="{{$setting->pt2_option5_text }}" >
                                            <label for="exampleInputuname1">Option5 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt2_option5_link" value="{{$setting->pt2_option5_link}}">
                                            <label for="exampleInputuname2"> Option5 Link</label>
                                        </div>   
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt2_option6_text" value="{{$setting->pt2_option6_text }}" >
                                            <label for="exampleInputuname1">Option6 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt2_option6_link" value="{{$setting->pt2_option6_link}}">
                                            <label for="exampleInputuname2"> Option6 Link</label>
                                        </div>      
                                    </div>
                                    <div class="tab-pane fade show " id="footer3" role="tabpanel" aria-labelledby="footer3-tab">
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt3_option1_text" value="{{$setting->pt3_option1_text }}" >
                                            <label for="exampleInputuname1">Option1 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt3_option1_link" value="{{$setting->pt3_option1_link}}">
                                            <label for="exampleInputuname2"> Option1 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt3_option2_text" value="{{$setting->pt3_option2_text }}" >
                                            <label for="exampleInputuname1">Option2 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt3_option2_link" value="{{$setting->pt3_option2_link}}">
                                            <label for="exampleInputuname2"> Option2 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt3_option3_text" value="{{$setting->pt3_option3_text }}" >
                                            <label for="exampleInputuname1">Option3 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt3_option3_link" value="{{$setting->pt3_option3_link}}">
                                            <label for="exampleInputuname2"> Option3 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt3_option4_text" value="{{$setting->pt3_option4_text }}" >
                                            <label for="exampleInputuname1">Option4 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt3_option4_link" value="{{$setting->pt3_option4_link}}">
                                            <label for="exampleInputuname2"> Option4 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt3_option5_text" value="{{$setting->pt3_option5_text }}" >
                                            <label for="exampleInputuname1">Option5 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt3_option5_link" value="{{$setting->pt3_option5_link}}">
                                            <label for="exampleInputuname2"> Option5 Link</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="pt3_option6_text" value="{{$setting->pt3_option6_text }}" >
                                            <label for="exampleInputuname1">Option6 Text</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="pt3_option6_link" value="{{$setting->pt3_option6_link}}">
                                            <label for="exampleInputuname2"> Option6 Link</label>
                                        </div>
                                    </div>  
                                    <div class="tab-pane fade show " id="footer4" role="tabpanel" aria-labelledby="footer4-tab">
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="exampleInputuname1" name="footer_text1" value="{{$setting->footer_text1 }}" >
                                            <label for="exampleInputuname1">Footer text1</label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="footer_text2" value="{{$setting->footer_text2}}">
                                            <label for="exampleInputuname2"> Footer text2</label>
                                        </div> 
                                        <div class="form-group m-b-40">
                                        <label for="exampleInputuname2">Footer Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="footer_image1" class="dropify" data-default-file="{{$setting->footer_image1}}" />
                                           
                                        </div>
                                        <div class="form-group m-b-40">
                                        <label for="exampleInputuname2">Footer Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="footer_image2" class="dropify" data-default-file="{{$setting->footer_image2}}" />

                                        </div>
                                        <div class="form-group m-b-40">
                                        <label for="exampleInputuname2">Footer Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="footer_image3" class="dropify" data-default-file="{{$setting->footer_image3}}" />
                                     
                                        </div>
                                        <!-- <div class="form-group m-b-40">
                                        <label for="exampleInputuname2">Footer Logo</label><br><br>
                                         <input type="file" id="input-file-now-custom-1" name="footer_image4" class="dropify" data-default-file="{{$setting->footer_image4}}" />
                                            
                                        </div>  -->
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control " id="exampleInputuname2" name="copy_right" value="{{$setting->copy_right}}">
                                            <label for="exampleInputuname2">Copy Right</label>
                                        </div> 
                                    </div> 
                                    <div class="mt-5 text-right">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <a href="{{route('admin.dashbord')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                                    </div>
                                </div> 
                            </form> 
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection