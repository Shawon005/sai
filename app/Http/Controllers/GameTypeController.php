<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GameTypeController extends Controller
{
    public function index()
    {
        //
        $games=DB::table('games')->get();

        return view('Admin.game_type.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.game_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd($request->all());
        DB::table('games')->insert([
        'name'=>request()->name,
        'color'=>request()->color,
        'logo'=>saveFile($request,'logo'),
    ]);
  
    return redirect()->route('admin.game.index')->with('message' , 'Store was successful!');
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
        $game=DB::table('games')->where('id',$id)->first();
        return view('Admin.game_type.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game=DB::table('games')->where('id',$id)->first();

        if($request->logo==null)
        {
            $img=$game->logo;
        }
        else{
            $img=saveFile($request,'logo');
        }
        DB::table('games')->where('id',$id)->update([
            'name'=>request()->name,
            'color'=>request()->color,
            'logo'=>$img,
        ]);
      
        return redirect()->route('admin.game.index')->with('message' , 'Update was successful!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        //
        DB::table('games')->where('id',$id)->delete();
       
        return redirect()->route('admin.game.index')->with('message' , 'Delete was successful!');

    }
}
