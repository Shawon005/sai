<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
use App\Models\Review;
class ReviewController extends Controller
{
    public function index()
    {
        //
        $reviews=Review::with('reply')->get();
       
        return view('Admin.review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        DB::table('reviews')->insert([
            'blog_id'=>request()->blog_id,
            'name'=>request()->name,
            'email'=>request()->email,
            'question'=>request()->question,
            'cdt'=>now(),
        
    ]);
    
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
        $review=DB::table('reviews')->where('id',$id)->first();
        return view('Admin.review.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Review::findorFail($id);
        $post->reply()->create([
            'review_id'=>$post->id,
            'name'=>request()->name,
            'email'=>request()->email,
            'reply'=>request()->reply,
        ]);

        // DB::table('reviews')->where('id',$id)->update([
            
        //     'answer'=>request()->answer,
        //     'status'=>(request()->status)==null?0:1,
        //     'cdt'=>now(),
            
        // ]);
        return redirect()->route('admin.review.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $review=DB::table('reviews')->where('id',$id)->first();
        if($review->status==1){
        DB::table('review')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('review')->where('id',$id)->update([
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
        DB::table('review')->where('id',$id)->delete();
        return redirect()->route('admin.review.index')->with('message' , 'Delete was successful!');

    }
}
