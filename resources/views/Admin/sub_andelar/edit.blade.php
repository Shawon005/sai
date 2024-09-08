@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">System</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">System</li>
                    <li class="breadcrumb-item active">System Details</li>
                </ol>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Skapa Nytt System</h4>
                 
                        <form class="floating-labels m-t-40" action="{{route('admin.andelar_sub.update',$andelar->id)}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group m-b-40">
                                
                                <select name="andelar" id="exampleInputuname1"class="form-control">
                                    @foreach($andelars as $andelard)
                                    @if($andelar->andelar==$andelard->id)
                                    <option value="{{$andelard->id}}" selected>{{$andelard->title}}</option>
                                    @else
                                    <option value="{{$andelard->id}}">{{$andelard->title}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <label for="exampleInputuname1">Tipster</label>
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="title"  value="{{$andelar->title}}" required="">
                                <label for="exampleInputuname1">Namn på System</label>
                            </div>
                          
                            <div class="form-group m-b-40">
                            <label for="exampleInputuname1">Spelform</label>
                                <select  id="" class="form-control clr-cod" name="type">
                                    @foreach($games as $game)
                                    @if($andelar->type==$game->id)
                                    <option value="{{$game->id}}" selected>{{$game->name}}</option>
                                    @else
                                    <option value="{{$game->id}}">{{$game->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <!-- <input type="color" class="form-control clr-pan" id="exampleInputuname1" name="color"  value="{{$andelar->color}}" >
                                <label for="exampleInputuname1">Color</label>
                                <input type="text" name="common_yellow_1_bottom_band" class="form-control clr-cod" placeholder="color code"value="{{$andelar->color}}" minlength="7" maxlength="7" required=""> -->
                            </div>
                            <div class="form-group m-b-40">
                                <input type="text" class="form-control" id="exampleInputuname1" name="link"   value="{{$andelar->link}}" >
                                <label for="exampleInputuname1">Länk</label>
                            </div>
                            <div class="form-group m-b-40">
                                <div class="checkbox checkbox-success ">
                                    <input id="checkbox1" type="checkbox" name="status"class="form-control"{{$andelar->status==1?'checked':''}}>
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
    $('.clr-pan').on('input', function() {
        $(this).siblings('.clr-cod').val(this.value);
    });
    $('.clr-cod').on('input', function() {
      $(this).siblings('.clr-pan').val(this.value);
    });
});
  </script>
  @endsection