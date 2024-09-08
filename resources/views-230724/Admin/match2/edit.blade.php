@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">SpelTips</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    @foreach ($errors->all() as $error)
                    <strong>{{$error}}</strong><br>
                    @endforeach
                </div>
                @endif
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">SpelTips</li>
                    <li class="breadcrumb-item active">SpelTips Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New SpelTips</h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.match2.update',$match->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="name" value="{{$match->name}}">
                                <label for="exampleInputuname1">Tipspel Name</label>
                            </div> 
                            <div class="card form-group m-b-40">
                                <div class="card-body">
                                    <h4 class="card-title"> Details</h4>
                                    <textarea id="mymce" name="details">{{$match->details}}</textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-40">
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="image">
                                <label for="exampleInputuname2"> Image</label>
                            </div>   
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control " id="exampleInputuname2"value="{{$match->youtube}}" name="youtube">
                                <label for="exampleInputuname2">Youtube</label>
                            </div> 
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="sub_title" value="{{$match->sub_title}}">
                                <label for="exampleInputuname1">Sub Title</label>
                            </div>
                            <div class="form-group m-b-40"> 
                                <label for="exampleInputuname1">Date</label><br>   
                                <input type="date" class="form-control" id="exampleInputuname1" value="{{$match->cdt}}"name="cdt" >
                                
                            </div>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="sub_title_btn"class="form-control"{{$match->sub_title_btn==1?'checked':''}}>
                                    <label for="checkbox1">Sub Title Enable Disable </label>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control"{{$match->status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
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