
@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Admin</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Admin Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{table('admin','id',session('id'),'name')}}</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.auth.update',$admin->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="name" value="{{$admin->name}}">
                                <label for="exampleInputuname1">Admin Name</label>
                            </div>
                            @error('name')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="email" value="{{$admin->email}}">
                                <label for="exampleInputuname1">Admin Email</label>
                            </div>
                            @error('email')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="mobile" value="{{$admin->mobile}}">
                                <label for="exampleInputuname1">Admin Mobile</label>
                            </div>
                            @error('mobile')
                            <span class="small text-danger">{{$message}}</span>
                            @enderror

                            <div class="form-group m-b-40">
                                
                                <label for="input-file-now-custom-1">Profile Image</label>
                                <input type="file" id="input-file-now-custom-1" name="profile_image" class="dropify" data-default-file="{{$admin->profile_image}}" />
                               
                            </div>  
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="facebook" value="{{$admin->facebook}}">
                                <label for="exampleInputuname1">Facebook</label>
                            </div>  
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="twitter" value="{{$admin->twitter}}">
                                <label for="exampleInputuname1">Twitter</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="whatsapp" value="{{$admin->whatsapp}}">
                                <label for="exampleInputuname1">Whatsapp</label>
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