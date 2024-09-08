<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class NewsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $newses=DB::table('news')->get();
        return view('Admin.news.index',compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=DB::table('news_categories')->get();
        return view('Admin.news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'news_title'=>'required|unique:news,news_title',
        ]);
        //
        //dd($request->all());
        DB::table('news')->insert([
        'news_title'=>request()->news_title,
        'news_category'=>request()->news_category,
        'user_id'=>session('id'),
        'news_description'=>request()->news_description,
        'news_image'=>saveFile($request,'news_image'),
        'thumbnail'=>saveFile($request,'thumbnail'),
        'news_status'=>(request()->news_status)==null?0:1,
        'seo_description'=>request()->news_description,
        'seo_title'=>request()->news_title,
        'news_slug'=>Str::of(request()->news_title)->slug('-'),
        'news_cdt'=>now(),
        'is_pin'=>(request()->is_pin)==null?0:1,
    ]);
    activices('news','store');
    return redirect()->route('admin.news.index')->with('message' , 'Store was successful!');
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
        $categories=DB::table('news_categories')->get();
        $news=DB::table('news')->where('news_slug',$id)->first();
        return view('Admin.news.edit',compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $val=unique('news','news_title',request()->news_title,'news_id',$id);
        if($val!=0){
            $request->validate([ 
                'news_title'=>'required|unique:news,news_title',
            ]);
        }
        $news=DB::table('news')->where('news_id',$id)->first();
        if($request->news_image==null)
        {
            $img=$news->news_image;
        }
        else{
            $img=saveFile($request,'news_image');
        }
        if($request->thumbnail==null)
        {
            $img1=$news->thumbnail;
        }
        else{
            $img1=saveFile($request,'thumbnail');
        }
        DB::table('news')->where('news_id',$id)->update([
            'news_title'=>request()->news_title,
            'user_id'=>session('id'),
            'news_description'=>request()->news_description,
            'news_category'=>request()->news_category,
            'news_image'=>$img,
            'thumbnail'=>$img1,
            'news_status'=>(request()->news_status)==null?0:1,
            'seo_description'=>request()->news_description,
            'seo_title'=>request()->news_title,
            'news_slug'=>Str::of(request()->news_title)->slug('-'),
            'news_cdt'=>now(),
            'is_pin'=>(request()->is_pin)==null?0:1,
        ]);
        activices('news','update');
        return redirect()->route('admin.news.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $news=DB::table('news')->where('news_id',$id)->first();
        if($news->news_status==1){
        DB::table('news')->where('news_id',$id)->update([
            'news_status'=>0,
        ]);
        }
        else{
            DB::table('news')->where('news_id',$id)->update([
                'news_status'=>1,
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
        DB::table('news')->where('news_slug',$id)->delete();
        activices('news','delete');
        return redirect()->route('admin.news.index')->with('message' , 'Delete was successful!');

    }
}
