<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class MatchEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs=DB::table('match_events')->where('type','pooltip')->get();

        return view('Admin.match.index',compact('matchs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=DB::table('category')->get();
        $tipstars=DB::table('tipspel')->get();
        return view('Admin.match.create',compact('categories','tipstars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'details'=>'required',
            'company_name'=>'required',
            'company_link'=>'required',
            'tipstar_id'=>'required',
            'banner'=>'required',
            'company_logo'=>'required',
        ]);

        DB::table('match_events')->insert([
            'title'=>request()->title,
            'details'=>request()->details,
            'type'=>request()->type,
            'category_id'=>request()->category_id,
            'company_name'=>request()->company_name,
            'company_link'=>request()->company_link,
            'tipstar_id'=>request()->tipstar_id,
            'banner'=>saveFile($request,'banner'),
            'company_logo'=>saveFile($request,'company_logo'),
            'status'=>(request()->status)==null?0:1,
            'slug'=>Str::of(request()->title)->slug('-'),
            'submit_link'=>request()->submit_link,
            'api'=>(request()->api)==null?0:1,
            'odds'=>request()->odds,
           ]);
           return redirect()->route('admin.match.index')->with('message' , 'Store was successful!');
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
        $match=DB::table('match_events')->where('id',$id)->first();
        $categories=DB::table('category')->get();
        $tipstars=DB::table('tipspel')->get();
        return view('Admin.match.edit',compact('match','categories','tipstars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'details'=>'required',
            'company_name'=>'required',
            'company_link'=>'required',
            'tipstar_id'=>'required', 
        ]);
        $match=DB::table('match_events')->where('id',$id)->first();
        if($request->company_logo==null)
        {
            $img=$match->company_logo;
        }
        else{
            $img=saveFile($request,'company_logo');
        }
        if($request->banner==null)
        {
            $img1=$match->banner;
        }
        else{
            $img1=saveFile($request,'banner');
        }
        DB::table('match_events')->where('id',$id)->update([
            'title'=>request()->title,
            'details'=>request()->details,
            'type'=>request()->type,
            'category_id'=>request()->category_id,
            'company_name'=>request()->company_name,
            'company_link'=>request()->company_link,
            'tipstar_id'=>request()->tipstar_id,
            'banner'=>$img1,
            'company_logo'=>$img,
            'status'=>(request()->status)==null?0:1,
            'slug'=>Str::of(request()->title)->slug('-'),
            'submit_link'=>request()->submit_link,
            'api'=>(request()->api)==null?0:1,
            'odds'=>request()->odds,
           ]);
           return redirect()->route('admin.match.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('match_events')->where('id',$id)->delete();
        return redirect()->route('admin.match.index')->with('message' , 'Delete was successful!');
    }
    public function status(Request $request,string $id)
    {
        $match=DB::table('match_events')->where('id',$id)->first();
        if($match->status==1){
        DB::table('match_events')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('match_events')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
}
