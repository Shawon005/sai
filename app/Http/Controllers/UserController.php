<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=DB::table('users')->get();
        return view('Admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        //
        //dd($request->all());
        DB::table('users')->insert([
        'name'=>request()->name,
        'email_id'=>request()->email,
        'profile_image'=>saveFile($request,'profile_image'),
        'mobile_number'=>request()->mobile,
        'password'=>request()->password,
        'user_address'=>request()->address,
        'date_of_birth'=>request()->dob,
        'status'=>(request()->status)==null?0:1,
        'user_slug'=>(Str::of(request()->name)->slug('-')).Str::random(5),
        'user_cdt'=>now(),
        
    ]);
    activices('user','store');
    return redirect()->route('admin.user.index')->with('message' , 'Store was successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user=DB::table('users')->where('user_slug',$id)->first();
        return view('Admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $user=DB::table('users')->where('user_id',$id)->first();
        if($request->profile_image==null)
        {
            $img=$user->profile_image;
        }
        else{
            $img=saveFile($request,'profile_image');
        }
        DB::table('users')->where('user_id',$id)->update([
            'name'=>request()->name,
            'email_id'=>request()->email,
            'profile_image'=>$img,
            'mobile_number'=>request()->mobile,
            'password'=>request()->password,
            'user_address'=>request()->address,
            'date_of_birth'=>request()->dob,
            'status'=>(request()->status)==null?0:1,
            'user_slug'=>(Str::of(request()->name)->slug('-')).Str::random(5),
            'user_cdt'=>now(),
        ]);
        activices('user','update');
        return redirect()->route('admin.user.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $user=DB::table('users')->where('user_id',$id)->first();
        if($user->status==1){
        DB::table('users')->where('user_id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('users')->where('user_id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        //
        DB::table('users')->where('user_slug',$id)->delete();
        activices('user','delete');
        return redirect()->route('admin.user.index')->with('message' , 'Delete was successful!');

    }
}
