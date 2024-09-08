<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faqs=DB::table('faq')->get();

        return view('Admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //dd($request->all());
        DB::table('faq')->insert([
        'question'=>request()->question,
        'answer'=>request()->answer,
        'status'=>(request()->status)==null?0:1,
        'seo_description'=>request()->answer,
        'seo_title'=>request()->question,
        'faq_slug'=>Str::of(request()->question)->slug('-'),
        'faq_cdt'=>now(),
        
    ]);
  
    activices('faq','store');
    return redirect()->route('admin.faq.index')->with('message' , 'Store was successful!');
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
        $faq=DB::table('faq')->where('faq_slug',$id)->first();
        return view('Admin.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('faq')->where('id',$id)->update([
            'question'=>request()->question,
            'answer'=>request()->answer,
            'status'=>(request()->status)==null?0:1,
            'seo_description'=>request()->answer,
            'seo_title'=>request()->question,
            'faq_slug'=>Str::of(request()->question)->slug('-'),
            'faq_cdt'=>now(),
            
        ]);
        activices('faq','update');
        return redirect()->route('admin.faq.index')->with('message' , 'Update was successful!');
    }
    public function status(Request $request,string $id)
    {
        $faq=DB::table('faq')->where('id',$id)->first();
        if($faq->status==1){
        DB::table('faq')->where('id',$id)->update([
            'status'=>0,
        ]);
        }
        else{
            DB::table('faq')->where('id',$id)->update([
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
        DB::table('faq')->where('faq_slug',$id)->delete();
        activices('faq','delete');
        return redirect()->route('admin.faq.index')->with('message' , 'Delete was successful!');

    }
}
