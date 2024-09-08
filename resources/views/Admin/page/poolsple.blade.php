@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Contact Layout</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Contact Layout</li>
                    <li class="breadcrumb-item active">Contact Details</li>
                </ol>
            </div>
           
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Contact Layout</h4>
                        @php $setting=setting(); @endphp
                        <form class="floating-labels m-t-40" action="{{route('admin.spelansvar.update',2)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                <textarea id="mymce1" name="contain1">{{$spela->contain1}}</textarea>
                            </div>

                            <div class="form-group m-b-40">
                                <!-- <input type="text" class="form-control" id="exampleInputuname1" name="contain2" value="{{$spela->contain2}}" >
                                <label for="exampleInputuname1">Contain</label> -->
                                <label for="exampleInputuname1">Contain</label><br><br>
                                <textarea id="mymce2" name="contain2">{{$spela->contain2}}</textarea>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname2">Contact Banner</label><br><br>
                                <input type="file" id="input-file-now-custom-1" name="contain_image" class="dropify" data-default-file="{{$spela->contain_image}}" />
                            </div> 
                            <!-- <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="contain2" value="{{$spela->contain2}}" >
                                <label for="exampleInputuname1">Contain</label>
                            </div> -->
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname2">Banner Image</label><br><br>
                                <input type="file" id="input-file-now-custom-1" name="page_banner" class="dropify" data-default-file="{{$spela->page_banner}}" />
                            </div> 

                            <div class="form-group m-b-40">
                                <label for="exampleInputuname1">Banner Text</label><br><br>
                                <textarea id="mymce" name="banner_text"value="">{{$spela->banner_text}}</textarea>
                            </div>

                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="text_link" value="{{$spela->text_link}}">
                                <label for="exampleInputuname1">Banner Link</label>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname2">Sub Banner Image</label><br><br>
                                <input type="file" id="input-file-now-custom-1" name="sub_bannar" class="dropify" data-default-file="{{$spela->sub_bannar}}" />
                            </div> 

                            <div class="form-group m-b-40">
                                <label for="exampleInputuname1">Sub Banner Link</label>
                                <input class="form-control" type="text" name="sub_bannar_link"value="{{$spela->sub_bannar_link}}">
                            </div>
                            <div>
                                <input type="checkbox"  name="status" class="js-switch" id="switch" data-color="#118a27" data-size="small"  {{($spela->btn_status==1)?'checked':''}} /> Button Anable Disable
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection