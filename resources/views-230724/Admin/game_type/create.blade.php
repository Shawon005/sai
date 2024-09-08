@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Game Type</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Game Type</li>
                    <li class="breadcrumb-item active">Game Type</li>
                </ol>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Game Type</h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.game.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="name"  required="">
                                <label for="exampleInputuname1">Name</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="logo" required="">
                                <label for="exampleInputuname2">Logo</label>
                            </div>   
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname1">Color</label>
                                <input type="color" class="form-control clr-pan" id="exampleInputuname1" name="color" value="">
                                <input type="text" name="common_yellow_1_bottom_band" class="form-control clr-cod" placeholder="color code"value="" minlength="7" maxlength="7" required="">
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
  @section('js')
  <script>
    $(document).ready(function(){
    $('.clr-pan').on('change', function() {
        $(this).siblings('.clr-cod').val(this.value);
    });
    $('.clr-cod').on('change', function() {
      $(this).siblings('.clr-pan').val(this.value);
    });
});
  </script>
  @endsection