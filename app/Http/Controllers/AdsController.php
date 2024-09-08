<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        //
        $adss=DB::table('ads')->get();
        return view('Admin.Ads.index',compact('adss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.Ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        //dd($request->all());
        DB::table('ads')->insert([
        'link'=>request()->link,
        'image'=>saveFile($request,'image'),
        'status'=>(request()->status)==null?0:1,
       
    ]);
    activices('ads','store');
    return redirect()->route('admin.ads.index')->with('message' , 'Store was successful!');
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
        $ads=DB::table('ads')->where('id',$id)->first();
        return view('Admin.Ads.edit',compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ads=DB::table('ads')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$ads->image;
        }
        else{
            $img=saveFile($request,'image');
        }
  
        DB::table('ads')->where('id',$id)->update([
            'link'=>request()->title,
            'image'=>$img,
            'status'=>(request()->status)==null?0:1,
        ]);
        activices('ads','update');
        return redirect()->route('admin.ads.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $tipspel=DB::table('ads')->where('id',$id)->first();
        if($tipspel->status==1){
        DB::table('ads')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('ads')->where('id',$id)->update([
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
        DB::table('ads')->where('id',$id)->delete();
        activices('ads','delete');
        return redirect()->route('admin.ads.index')->with('message' , 'Delete was successful!');

    }
}
