@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Andelar</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Andelar</li>
                    <li class="breadcrumb-item active">Andelar Details</li>
                </ol>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Andelar</h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.andelar_sub.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40">
                                
                                <select name="andelar" id="exampleInputuname1"class="form-control">
                                    @foreach($andelars as $andelar)
                                    <option value="{{$andelar->id}}">{{$andelar->title}}</option>
                                    @endforeach
                                </select>
                                <label for="exampleInputuname1">Andelar</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="title"  required="">
                                <label for="exampleInputuname1">Title</label>
                            </div>
                            
                            <div class="form-group m-b-40">
                            <label for="exampleInputuname1">Game Type</label>
                                <select  id="" class="form-control clr-cod" name="type">
                                    
                                    @foreach($games as $game)
                                    <option value="{{$game->id}}">{{$game->name}}</option>
                                    @endforeach
                                </select>

                                <!-- <input type="text" name="common_yellow_1_bottom_band" class="form-control clr-cod" placeholder="color code"value="" minlength="7" maxlength="7" required=""> -->
                            </div>
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="link"  >
                                <label for="exampleInputuname1">Link</label>
                            </div>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control">
                                    <label for="checkbox1">Is Published </label>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a href="{{route('admin.andelar_sub.show',1)}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
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
    // $('.clr-pan').on('change', function() {
    //     $(this).siblings('.clr-cod').val(this.value);
    // });
    $('.clr-cod').on('change', function() {
      $(this).siblings('.clr-pan').val(this.value);
    });
});
  </script>
  @endsection