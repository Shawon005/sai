<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs=DB::table('blogs')->get();
        return view('Admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_name'=>'required|unique:blogs,blog_name',
            'blog_description'=>'required',
        ]);
        //
        //dd($request->all());
        DB::table('blogs')->insert([
        'blog_name'=>request()->blog_name,
        'user_id'=>session('id'),
        'blog_category'=>request()->blog_category,
        'blog_description'=>request()->blog_description,
        'blog_image'=>saveFile($request,'blog_image'),
        'thumbnail'=>saveFile($request,'thumbnail'),
        'banner_image'=>saveFile($request,'banner_image'),
        'banner_link'=>request()->banner_link,
        'blog_status'=>(request()->blog_status)==null?0:1,
        'is_pin'=>(request()->is_pin)==null?0:1,
        'seo_description'=>request()->blog_description,
        'seo_title'=>request()->blog_name,
        'blog_slug'=>Str::of(request()->blog_name)->slug('-'),
        'blog_cdt'=>now(),
    ]);
    activices('blog','store');
    return redirect()->route('admin.blog.index')->with('message' , 'Store was successful!');
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
        $blog=DB::table('blogs')->where('blog_slug',$id)->first();
        return view('Admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $val=unique('blogs','blog_name',request()->blog_name,'blog_id',$id);
        if($val!=0){
            $request->validate([ 
                'blog_name'=>'required|unique:blogs,blog_name',
            ]);
        }
        $request->validate([
            'blog_description'=>'required',
        ]);
        $blog=DB::table('blogs')->where('blog_id',$id)->first();
        if($request->blog_image==null)
        {
            $img=$blog->blog_image;
        }
        else{
            $img=saveFile($request,'blog_image');
        }
        if($request->thumbnail==null)
        {
            $img1=$blog->thumbnail;
        }
        else{
            $img1=saveFile($request,'thumbnail');
        }
        if($request->banner_image==null)
        {
            $img2=$blog->banner_image;
        }
        else{
            $img2=saveFile($request,'banner_image');
        }
        DB::table('blogs')->where('blog_id',$id)->update([
            'blog_name'=>request()->blog_name,
            'user_id'=>session('id'),
            'blog_category'=>request()->blog_category,
            'blog_description'=>request()->blog_description,
            'blog_image'=>$img,
            'thumbnail'=>$img1,
            'banner_image'=>$img2,
            'banner_link'=>request()->banner_link,
            'blog_status'=>(request()->blog_status)==null?0:1,
            'seo_description'=>request()->blog_description,
            'seo_title'=>request()->blog_name,
            'is_pin'=>(request()->is_pin)==null?0:1,
            'blog_slug'=>Str::of(request()->blog_name)->slug('-'),
            'blog_cdt'=>now(),
        ]);
        activices('blog','update');
        return redirect()->route('admin.blog.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $blog=DB::table('blogs')->where('blog_id',$id)->first();
        if($blog->blog_status==1){
        DB::table('blogs')->where('blog_id',$id)->update([
            'blog_status'=>0,
        ]);
        }
        else{
            DB::table('blogs')->where('blog_id',$id)->update([
                'blog_status'=>1,
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
        DB::table('blogs')->where('blog_slug',$id)->delete();
        activices('blog','delete');
        return redirect()->route('admin.blog.index')->with('message' , 'Delete was successful!');

    }
}
