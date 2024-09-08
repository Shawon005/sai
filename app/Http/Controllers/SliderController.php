<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders=DB::table('slider')->where('type',0)->get();
        return view('Admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           
            'image'=>'required',
        ]);
        //
        //dd($request->all());
        DB::table('slider')->insert([
        'title'=>request()->title,
        'description'=>request()->description,
        'image'=>saveFile($request,'image'),
        'btn_text'=>request()->btn_text,
        'btn_link'=>request()->btn_link,
        'status'=>(request()->status)==null?0:1,
        'cdt'=>now()
    ]);
    activices('slider','store');
    return redirect()->route('admin.slider.index')->with('message' , 'Store was successful!');
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
        $slider=DB::table('slider')->where('id',$id)->first();
        return view('Admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $slider=DB::table('slider')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$slider->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        //dd($request->all());
        DB::table('slider')->where('id',$id)->update([
        'title'=>request()->title,
        'description'=>request()->description,
        'image'=>$img,
        'btn_text'=>request()->btn_text,
        'btn_link'=>request()->btn_link,
        'status'=>(request()->status)==null?0:1,
        'cdt'=>now()
    ]);
    activices('slider','update');
    return redirect()->route('admin.slider.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status(Request $request,string $id)
    {
        $slider=DB::table('slider')->where('id',$id)->first();
        if($slider->status==1){
        DB::table('slider')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('slider')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    public function destroy(string $id)
    {
        DB::table('slider')->where('id',$id)->delete();
        activices('slider','delete');
        return redirect()->route('admin.slider.index')->with('message' , 'Delete was successful!');
    }
}
