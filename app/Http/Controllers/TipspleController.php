<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class TipspleController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Tipsters=DB::table('tipspel')->get();
        return view('Admin.tipspel.index',compact('Tipsters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.tipspel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        //dd($request->all());
        DB::table('tipspel')->insert([
        'fullname'=>request()->fullname,
        'nickname'=>request()->nickname,
        'profile_image'=>saveFile($request,'profile_image'),
        'banner_image'=>saveFile($request,'banner_image'),
        'status'=>(request()->status)==null?0:1,
        'details'=>request()->details,
        'slug'=>Str::of(request()->fullname)->slug('-'),
    ]);
    activices('tipspel','store');
    return redirect()->route('admin.tipspel.index')->with('message' , 'Store was successful!');
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
        $tipspel=DB::table('tipspel')->where('id',$id)->first();
        return view('Admin.tipspel.edit',compact('tipspel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipspel=DB::table('tipspel')->where('id',$id)->first();
        if($request->profile_image==null)
        {
            $img=$tipspel->profile_image;
        }
        else{
            $img=saveFile($request,'profile_image');
        }
        if($request->banner_image==null)
        {
            $img1=$tipspel->banner_image;
        }
        else{
            $img1=saveFile($request,'banner_image');
        }  
        DB::table('tipspel')->where('id',$id)->update([
            'fullname'=>request()->fullname,
            'nickname'=>request()->nickname,
            'profile_image'=>$img,
            'banner_image'=>$img1,
            'status'=>(request()->status)==null?0:1,
            'details'=>request()->details,
        ]);
        activices('tipspel','update');
        return redirect()->route('admin.tipspel.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $tipspel=DB::table('tipspel')->where('id',$id)->first();
        if($tipspel->status==1){
        DB::table('tipspel')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('tipspel')->where('id',$id)->update([
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
        DB::table('tipspel')->where('id',$id)->delete();
        activices('tipspel','delete');
        return redirect()->route('admin.tipspel.index')->with('message' , 'Delete was successful!');

    }
}
