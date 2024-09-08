<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class PoolspelController extends Controller
{
    public function index()
    {
        //
        $pools=DB::table('poolspel')->orderBy('position','asc')->get();
        return view('Admin.poolspel.index',compact('pools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.poolspel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
     
        //
        //dd($request->all());
        DB::table('poolspel')->insert([
        'tab_name'=>request()->tab_name,
        'tab_image'=>saveFile($request,'tab_image'),
        'contain1'=>request()->contain1,
        'contain2'=>request()->contain2,
        'contain_image'=>saveFile($request,'contain_image'),
        'status'=>(request()->status)==null?0:1,
        'cdt'=>now()
    ]);

    return redirect()->route('admin.poolspel.index')->with('message' , 'Store was successful!');
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
        $count1=DB::table('poolspel')->get();
        $count=count($count1);
        $pool=DB::table('poolspel')->where('id',$id)->first();
        return view('Admin.poolspel.edit',compact('pool','count','count1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $slider=DB::table('poolspel')->where('id',$id)->first();
        if($request->tab_image==null)
        {
            $img=$slider->tab_image;
        }
        else{
            $img=saveFile($request,'tab_image');
        }
        if($request->contain_image==null)
        {
            $img1=$slider->contain_image;
        }
        else{
            $img1=saveFile($request,'contain_image');
        }
        //dd($request->all());
        DB::table('poolspel')->where('id',$id)->update([
            'tab_name'=>request()->tab_name,
            'tab_image'=>$img,
            'contain1'=>request()->contain1,
            'contain2'=>request()->contain2,
            'contain_image'=>$img1,
            'status'=>(request()->status)==null?0:1,
            'position'=>$request->position,
            'cdt'=>now()
    ]);

    return redirect()->route('admin.poolspel.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status(Request $request,string $id)
    {
        $slider=DB::table('poolspel')->where('id',$id)->first();
        if($slider->status==1){
        DB::table('poolspel')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('poolspel')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    public function destroy(string $id)
    {
        DB::table('poolspel')->where('id',$id)->delete();
        return redirect()->route('admin.poolspel.index')->with('message' , 'Delete was successful!');
    }
}
