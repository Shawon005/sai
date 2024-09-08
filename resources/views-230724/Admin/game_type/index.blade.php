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
                    <li class="breadcrumb-item active">Game Type Details</li>
                </ol>
            </div>
           
        </div>
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert"></span>
                    <strong>{{session('message')}}</strong>
                </div>
                 @endif
                <h4 class="card-title"> Game Type</h4>
                <h6 class="card-subtitle">All Game Type Information</h6>
                <a  class="btn btn-info btn-rounded m-t-10 float-right" href="{{route('admin.game.create')}}">Nytt Game</a>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Color</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                            <tr>
                                <td >{{$game->name}}</td>
                                <td><img src="{{$game->logo}}" weight="100px" height="50px" alt="" ></td>
                                <td>{{$game->color}}</td>
                                <td><a class="btn-sm btn-info " href="{{route('admin.game.edit',$game->id)}}"><i class="fas fa-edit"></i></a> 
                                @method('delete')
                                <a onclick="return confirm('Are you want to delete')"  class="btn-sm btn-danger" href="{{route('admin.game.delete',$game->id) }}"><i class="fas fa-trash"></i></a> 
                              
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
  <!-- Model -->
  @endsection
 