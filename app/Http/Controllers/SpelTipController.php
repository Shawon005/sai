<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class SpelTipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $speltips=DB::table('speltip')->get();

        return view('Admin.speltip.index',compact('speltips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.speltip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd($request->all());
        DB::table('speltip')->insert([
        'question'=>request()->question,
        'answer'=>request()->answer,
        'status'=>(request()->status)==null?0:1,
        'seo_description'=>request()->answer,
        'seo_title'=>request()->question,
        'speltip_slug'=>Str::of(request()->question)->slug('-'),
        'speltip_cdt'=>now(),
        
    ]);
  
    activices('speltip','store');
    return redirect()->route('admin.speltip.index')->with('message' , 'Store was successful!');
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
        $speltip=DB::table('speltip')->where('speltip_slug',$id)->first();
        return view('Admin.speltip.edit',compact('speltip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('speltip')->where('id',$id)->update([
            'question'=>request()->question,
            'answer'=>request()->answer,
            'status'=>(request()->status)==null?0:1,
            'seo_description'=>request()->answer,
            'seo_title'=>request()->question,
            'speltip_slug'=>Str::of(request()->question)->slug('-'),
            'speltip_cdt'=>now(),
            
        ]);
        activices('speltip','update');
        return redirect()->route('admin.speltip.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $speltip=DB::table('speltip')->where('id',$id)->first();
        if($speltip->status==1){
        DB::table('speltip')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('speltip')->where('id',$id)->update([
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
        DB::table('speltip')->where('speltip_slug',$id)->delete();
        activices('speltip','delete');
        return redirect()->route('admin.speltip.index')->with('message' , 'Delete was successful!');

    }
}
