<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories=DB::table('news_categories')->get();

        return view('Admin.news_category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.news_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('news_categories')->insert([
         'name'=>request()->name,
         'slug'=>Str::of(request()->name)->slug('-'),
        ]);
        return redirect()->route('admin.news_category.index')->with('message' , 'Store was successful!');
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
        $category=DB::table('news_categories')->where('id',$id)->first();
        return view('Admin.news_category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('news_categories')->where('id',$id)->update([
            'name'=>request()->name
           ]);
           return redirect()->route('admin.news_category.index')->with('message' , 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('news_categories')->where('id',$id)->delete();
        return redirect()->route('admin.news_category.index')->with('message' , 'Delete was successful!');
    }
}
