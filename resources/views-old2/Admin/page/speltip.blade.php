@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Speltip Layout</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Speltip Layout</li>
                    <li class="breadcrumb-item active">Speltip Details</li>
                </ol>
            </div>
           
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Speltip Layout</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.spelansvar.update',7)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="contain1" value="{{$spela->contain1}}" >
                                <label for="exampleInputuname1">Faq Header Title</label>
                            </div>
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