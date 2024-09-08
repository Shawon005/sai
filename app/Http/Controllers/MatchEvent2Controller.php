<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MatchEvent2Controller extends Controller
{
    public function index()
    {
        $matchs=DB::table('speltip_new')->get();

        return view('Admin.match2.index',compact('matchs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('Admin.match2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'details'=>'required',
            'image'=>'required',
        ]);
        $video=request()->youtube;
        if(substr_compare($video,"<iframe",0)<0){
            $video=$video;
          }
          else{
            $video= preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe src=\"//www.youtube.com/embed/$2\" width='683' height='407' frameborder='0'></iframe>", $video);
          }
        DB::table('speltip_new')->insert([
            'name'=>request()->name,
            'details'=>request()->details,
            'image'=>saveFile($request,'image'),
            'sub_title'=>request()->sub_title,
            'sub_title_btn'=>(request()->sub_title_btn)==null?0:1,
            'status'=>(request()->status)==null?0:1,
            'youtube'=>$video,
            'banner_image'=>saveFile($request,'banner_image'),
            'cdt'=>request()->cdt,
           ]);
           return redirect()->route('admin.match2.index')->with('message' , 'Store was successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $match=DB::table('speltip_new')->where('id',$id)->first();
     
        return view('Admin.match2.edit',compact('match'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'details'=>'required',
            
        ]);
        $match=DB::table('speltip_new')->where('id',$id)->first();
       
        if($request->image==null)
        {
            $img=$match->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        if($request->banner_image==null)
        {
            $img2=$match->banner_image;
        }
        else{
            $img2=saveFile($request,'banner_image');
        }
        $video=request()->youtube;
        if(substr_compare($video,"<iframe",0)<0){
            $video=$video;
          }
          else{
            $video= preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe src=\"//www.youtube.com/embed/$2\" width='683' height='407' frameborder='0'></iframe>", $video);
          }
        DB::table('speltip_new')->where('id',$id)->update([
            'name'=>request()->name,
            'details'=>request()->details,
            'image'=>$img,
            'sub_title'=>request()->sub_title,
            'sub_title_btn'=>(request()->sub_title_btn)==null?0:1,
            'status'=>(request()->status)==null?0:1,
            'youtube'=>$video,
            'banner_image'=>$img2,
            'cdt'=>request()->cdt,
           ]);
           return redirect()->route('admin.match2.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('speltip_new')->where('id',$id)->delete();
        return redirect()->route('admin.match2.index')->with('message' , 'Delete was successful!');
    }
    public function status(Request $request,string $id)
    {
        $match=DB::table('speltip_new')->where('id',$id)->first();
        if($match->status==1){
        DB::table('speltip_new')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('speltip_new')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
}
