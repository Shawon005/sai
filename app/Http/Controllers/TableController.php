<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class TableController extends Controller
{
    public function index()
    {

        $tables=DB::table('game_table')->get();
        return view('Admin.table.index',compact('tables'));
    }

    /**
     * Show the form for creating a new resourgamece.
     */
    public function create()
    {

        return view('Admin.table.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {	
        DB::table('game_table')->insert([
        'title'=>request()->title,
        'category'=>request()->category,
        'date'=>request()->date,
        'image'=>saveFile($request,'image'),
        'link'=>request()->link,
        'status'=>(request()->status)==null?0:1,
        'cdt'=>request()->cdt,
        
    ]);

    return redirect()->route('admin.table.index')->with('message' , 'Store was successful!');
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
        $table=DB::table('game_table')->where('id',$id)->first();
        return view('Admin.table.edit',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $table=DB::table('game_table')->where('id',$id)->first();
        if($request->image==null)
        {
            $img=$table->image;
        }
        else{
            $img=saveFile($request,'image');
        }
        //dd($request->all());
        DB::table('game_table')->where('id',$id)->update([
            'title'=>request()->title,
            'category'=>request()->category,
            'date'=>request()->date,
            'link'=>request()->link,
            'image'=>$img,
            'status'=>(request()->status)==null?0:1,
            'cdt'=>request()->cdt,
    ]);

    return redirect()->route('admin.table.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status(Request $request,string $id)
    {
        $slider=DB::table('game_table')->where('id',$id)->first();
        if($slider->status==1){
        DB::table('game_table')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('game_table')->where('id',$id)->update([
                'status'=>1,
            ]);
        }
        response()->json(['Successfully update']);
    }
    public function destroy(string $id)
    {
        DB::table('game_table')->where('id',$id)->delete();
        return redirect()->route('admin.table.index')->with('message' , 'Delete was successful!');
    }
}
