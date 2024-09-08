<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Illuminate\Http\Request;

class MatchEventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=DB::table('category')->get();

        return view('Admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('category')->insert([
         'name'=>request()->name
        ]);
        return redirect()->route('admin.category.index')->with('message' , 'Store was successful!');
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
        $category=DB::table('category')->where('id',$id)->first();
        return view('Admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('category')->where('id',$id)->update([
            'name'=>request()->name
           ]);
           return redirect()->route('admin.category.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('category')->where('id',$id)->delete();
        return redirect()->route('admin.category.index')->with('message' , 'Delete was successful!');
    }
}
