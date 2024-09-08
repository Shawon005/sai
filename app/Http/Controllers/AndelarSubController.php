<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Illuminate\Http\Request;

class AndelarSubController extends Controller
{
     /**
     * Display a listing of the resource.
     */
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games=DB::table('games')->get();
        $andelars=DB::table('andelar')->get();
        return view('Admin.sub_andelar.create',compact('andelars','games'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game=DB::table('games')->where('id',$request->type)->first();
       
        //
        //dd($request->all());
        DB::table('sub_andelar')->insert([
        'title'=>request()->title,
        'type'=>$request->type,
        'image'=>$game->logo,
        'color'=>$game->color,
        'andelar'=>request()->andelar,
        'link'=>request()->link,
        'status'=>(request()->status)==null?0:1,
       
    ]);
    activices('andelar','store');
    return redirect()->route('admin.andelar_sub.show',request()->andelar)->with('message' , 'Store was successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $andelars=DB::table('sub_andelar')->where('andelar',$id)->get();
        return view('Admin.sub_andelar.index',compact('andelars','id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $andelars=DB::table('andelar')->get();
        $andelar=DB::table('sub_andelar')->where('id',$id)->first();
        $games=DB::table('games')->get();
        return view('Admin.sub_andelar.edit',compact('andelar','andelars','games'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game=DB::table('games')->where('id',$request->type)->first();
        $andelar=DB::table('sub_andelar')->where('id',$id)->first();
        
  
        DB::table('sub_andelar')->where('id',$id)->update([
            'title'=>request()->title,
            'type'=>$request->type,
            'image'=>$game->logo,
            'color'=>$game->color,
            'andelar'=>request()->andelar,
            'status'=>(request()->status)==null?0:1,
            'link'=>request()->link,
        ]);
        activices('andelar','update');
        return redirect()->route('admin.andelar_sub.show',request()->andelar)->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $tipspel=DB::table('sub_andelar')->where('id',$id)->first();
        if($tipspel->status==1){
        DB::table('sub_andelar')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('sub_andelar')->where('id',$id)->update([
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
        DB::table('sub_andelar')->where('id',$id)->delete();
        activices('sub_andelar','delete');
        return redirect()->back()->with('message' , 'Delete was successful!');

    }
}
