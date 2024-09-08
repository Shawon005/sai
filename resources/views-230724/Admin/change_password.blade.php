
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
                @if(session('message'))
                    <div class="alert alert-success">
                        <span class="close" data-dismiss="alert"></span>
                        <strong>{{session('message')}}</strong>
                    </div>
                 @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4>
                        <form class="floating-labels m-t-40" action="{{route('admin.password')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group m-b-40">
                                
                                <input type="password" class="form-control" id="exampleInputuname1" name="old_pass" >
                                <label for="exampleInputuname1">Old Password</label>
                            </div>
                        
                            <div class="form-group m-b-40">
                                
                                <input type="password" class="form-control new_pass" id="exampleInputuname2" name="new_pass" >
                                <label for="exampleInputuname2">New Password</label>
                            </div>
                           
                            <div class="form-group m-b-40">
                                
                                <input type="password" class="form-control con_pass" id="exampleInputuname3" name="con_pass" >
                                <label for="exampleInputuname3">confirm Password</label>
                            </div>
                            <small class="confirm"style="color:green;">Password  match</small>
                            <small class="confirm_w"style="color:red;">Password Not match</small>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 sub">Submit</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  @endsection
  @section('js')
  <script>
     $(document).ready(function(){
        $('.confirm').hide();
        $('.confirm_w').hide();
   var new_pass=$('.new_pass').val();
   $('.con_pass,.new_pass').on('input',function(){
       var new_pass=$('.new_pass').val();
       var con_pass=$('.con_pass').val();
      if(new_pass==con_pass)
      {
        $('.confirm').show();
        $('.confirm_w').hide();
        $('.sub').prop('disabled', false);
      }
      else{
        $('.confirm_w').show();
        $('.confirm').hide();
        $('.sub').prop('disabled', true);
      }
   });
});
  </script>
  @endsection