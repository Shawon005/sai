@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Poolspel Layout</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Poolspel Layout</li>
                    <li class="breadcrumb-item active">Poolspel Details</li>
                </ol>
            </div>
          
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Poolspel Layout</h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.poolspel.update',$pool->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="tab_name" value="{{$pool->tab_name}}"  required="">
                                <label for="exampleInputuname1">Tab Name</label>
                            </div>
                            <div class="form-group m-b-40">

                                <label for="exampleInputuname2">Tab Image</label> <br><br>
                                <input type="file" id="input-file-now-custom-1" name="tab_image" class="dropify" data-default-file="{{$pool->tab_image}}" />
                            </div> 
                            <div class="form-group m-b-40">
                                
                                <!-- <input type="description" class="form-control" id="exampleInputuname1" name="contain1" value="{{$pool->contain1}}" > -->
                                <label for="exampleInputuname1">contain</label>
                                <textarea id="mymce" name="contain1">{{$pool->contain1}}</textarea>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <!-- <input type="description" class="form-control" id="exampleInputuname1" name="contain2" value="{{$pool->contain2}}"> -->
                                <label for="exampleInputuname1">contain</label>
                                <textarea id="mymce1" name="contain2">{{$pool->contain2}}</textarea>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname2">Contain Image</label> <br><br>
                                <input type="file" id="input-file-now-custom-1" name="contain_image" class="dropify" data-default-file="{{$pool->contain_image}}" />
                            </div> 
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Position</label><br><br>
                                <select name="position" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Position</option>
                                    @php $bd=1; $ch=0; @endphp
                                    @php for($i=$count; $i>0; $i--){ @endphp
                                        @if($bd==$pool->position)
                                        <option value="{{$bd}}"selected>{{$bd}}</option>
                                        
                                        @else
                                        <!-- <option value="{{$bd}}">{{$bd}}</option> -->
                                            @foreach($count1 as $pos)
                                                @if($pos->position==$bd)
                                                    @php $ch=1; @endphp
                                                @endif
                                            @endforeach       
                                            @if($ch==0)
                                            <option value="{{$bd}}">{{$bd}}</option>
                                            @else
                                                @php $ch=0; @endphp
                                            @endif
                                            
                                            
                                        @endif
                                    @php $bd++; } @endphp
                                </select>
                            </div>  
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control"{{$pool->status==1?'checked':''}}>
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.poolspel.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection