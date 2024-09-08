@extends('Admin.layout.master')
  @section('content')
  <div class="container-fluid">
         <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Table</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Home</a></li>
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item active">Table Details</li>
                </ol>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Table</h4>
                        
                        <form class="floating-labels m-t-40" action="{{route('admin.table.store')}}" method ="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group m-b-40">
                                
                                <input type="text" class="form-control" id="exampleInputuname1" name="title"  >
                                <label for="exampleInputuname1">Title</label>
                            </div>
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Category</label><br><br>
                                <select name="category" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Category</option>
                                    <option value="Live">Live</option>
                                    <option value="PODD">PODD</option>
                                    <option value="Magasin">Magasin</option>
                                </select>
                            </div>  
                            <div class="form-group m-b-40">
                                <label for="exampleInputuname">Days</label><br><br>
                                <select name="date" id="inlineFormCustomSelect"class="custom-select col-12 m-b-40">
                                    <option value="">Select Days</option>
                                    <option value="MÅNDAG">MÅNDAG</option>
                                    <option value="TISDAG">TISDAG</option>
                                    <option value="ONSDAG">ONSDAG</option>
                                    <option value="TORSDAG">TORSDAG</option>
                                    <option value="FREDAG">FREDAG</option>
                                    <option value="LÖRDAG">LÖRDAG</option>
                                    <option value="SÖNDAG">SÖNDAG</option>
                                </select>
                            </div>  
                            <div class="form-group m-b-40">
                                
                                <input type="file" class="form-control text-right" id="exampleInputuname2" name="image"required="">
                                <label for="exampleInputuname2"> Image</label>
                            </div> 
                            <div class="form-group m-b-40" >
                            <label for="exampleInputuname1">Date</label><br>
                                <input type="datetime-local" class="date form-control" id="exampleInputuname1" name="cdt">
                            </div>
                            <div class="form-group m-b-40">
                                
                                <input type="description" class="form-control" id="exampleInputuname1" name="link" required="">
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
                                <a href="{{route('admin.table.index')}}"class="btn btn-inverse waves-effect waves-light">Cancel</a>
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
   
 $(document).ready(function() {
  $(".date").datetimepicker({locale: "ru"});
 });
</script>
  @endsection