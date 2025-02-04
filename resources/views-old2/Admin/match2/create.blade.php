@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Match/Event</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Match/Event</li>
                    <li class="breadcrumb-item active">Match/Event Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Match/Event</h4>
                        <h6 class="card-subtitle">made with bootstrap elements</h6>
                        <form class="floating-labels m-t-40" action="{{route('admin.match2.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                           
                           
                            <div class="form-group m-b-40 ">
                                <label for="exampleInputuname">Tipstar Name</label><br><br>
                                <input type="text" class="form-control" id="exampleInputuname1" name="name" >
                            </div>
                           
                            <div class="card form-group m-b-40">
                                <div class="card-body">
                                    <h4 class="card-title"> Details</h4>
                                    <textarea id="mymce" name="details"></textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="image">
                                <label for="exampleInputuname2"> Image</label>
                            </div>   
                           
                            <div class="form-group m-b-40">    
                                <input type="text" class="form-control" id="exampleInputuname1" name="sub_title" >
                                <label for="exampleInputuname1">Sub Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="sub_title_btn"class="form-control">
                                    <label for="checkbox1">Sub Title Enable Disable </label>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox2" type="checkbox" name="status"class="form-control">
                                    <label for="checkbox2">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.match2.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection