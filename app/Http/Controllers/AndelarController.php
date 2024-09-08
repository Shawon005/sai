<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class AndelarController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $andelars=DB::table('andelar')->get();
        return view('Admin.andelar.index',compact('andelars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.andelar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        //dd($request->all());
        DB::table('andelar')->insert([
        'title'=>request()->title,
        'image'=>saveFile($request,'image'),
        'status'=>(request()->status)==null?0:1,
       
    ]);
    activices('andelar','store');
    return redirect()->route('admin.andelar.index')->with('message' , 'Store was successful!');
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
        $count=DB::table('andelar')->get();
        $count=count($count);
        $andelar=DB::table('andelar')->where('id',$id)->first();
        return view('Admin.andelar.edit',compact('andelar','count'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $andelar=DB::table('andelar')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$andelar->image;
        }
        else{
            $img=saveFile($request,'image');
        }
  
        DB::table('andelar')->where('id',$id)->update([
            'title'=>request()->title,
            'image'=>$img,
            'status'=>(request()->status)==null?0:1,
            'position'=>$request->position,
        ]);
        activices('andelar','update');
        return redirect()->route('admin.andelar.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $tipspel=DB::table('andelar')->where('id',$id)->first();
        if($tipspel->status==1){
        DB::table('andelar')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('andelar')->where('id',$id)->update([
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
        DB::table('andelar')->where('id',$id)->delete();
        activices('andelar','delete');
        return redirect()->route('admin.andelar.index')->with('message' , 'Delete was successful!');

    }
}
