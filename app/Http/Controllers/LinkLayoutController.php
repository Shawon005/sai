<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class LinkLayoutController extends Controller
{
    //
    public function index()
    {
        $links=DB::table('slider')->where('type',1)->get();
        return view('Admin.link.index',compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.link.create');
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
        'is_pin'=>(request()->pin)==null?0:1,
        'type'=>1,
        'cdt'=>now()
    ]);
    activices('link','store');
    return redirect()->route('admin.link.index')->with('message' , 'Store was successful!');
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
        $link=DB::table('slider')->where('id',$id)->first();
        return view('Admin.link.edit',compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $link=DB::table('slider')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$link->image;
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
        'is_pin'=>(request()->pin)==null?0:1,
        'cdt'=>now()
    ]);
    activices('link','update');
    return redirect()->route('admin.link.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('slider')->where('id',$id)->delete();
        activices('link','delete');
        return redirect()->route('admin.link.index')->with('message' , 'Delete was successful!');
    }
}
