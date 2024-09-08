<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class ClicntController extends Controller
{
    public function index()
    {
        //
        $clients=DB::table('client')->get();
        return view('Admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        //
        //dd($request->all());
        DB::table('client')->insert([
        'name'=>request()->name,
        'link'=>request()->link,
        'image'=>saveFile($request,'image'),
        'status'=>(request()->status)==null?0:1,
        'cdt'=>now(),
        
    ]);
    activices('client','store');
    return redirect()->route('admin.client.index')->with('message' , 'Store was successful!');
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
        $client=DB::table('client')->where('id',$id)->first();
        return view('Admin.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client=DB::table('client')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$client->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        DB::table('client')->where('id',$id)->update([
            'name'=>request()->name,
            'link'=>request()->link,
            'image'=>$img,
            'status'=>(request()->status)==null?0:1,
            'cdt'=>now(),
        ]);
        activices('client','update');
        return redirect()->route('admin.client.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $client=DB::table('client')->where('id',$id)->first();
        if($client->status==1){
        DB::table('client')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('client')->where('id',$id)->update([
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
        DB::table('client')->where('id',$id)->delete();
        activices('client','delete');
        return redirect()->route('admin.client.index')->with('message' , 'Delete was successful!');

    }
}
