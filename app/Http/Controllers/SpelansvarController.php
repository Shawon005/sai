<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class SpelansvarController extends Controller
{
    //
    public function index()
    {
        $pages=DB::table('page_contain')->orderby('id','asc')->get();
        return view('Admin.page.index',compact('pages'));
    }
    public function edit(string $id)
    {
        $spela=DB::table('page_contain')->where('id',$id)->first();
        if($id==1){
            return view('Admin.page.spelansvar',compact('spela'));
        }
        if($id==2){
            return view('Admin.page.poolsple',compact('spela'));
        }
        if($id==3){
            return view('Admin.page.about',compact('spela'));
        }
        if($id==4){
            return view('Admin.page.blog',compact('spela'));
        }
        if($id==5){
            return view('Admin.page.news',compact('spela'));
        }
        if($id==6){
            return view('Admin.page.table',compact('spela'));
        }
        if($id==7){
            return view('Admin.page.speltip',compact('spela'));
        }
        if($id==8){
            return view('Admin.page.tipspel',compact('spela'));
        }
        if($id==9){
            return view('Admin.page.andelar',compact('spela'));
        }
        if($id==10){
            return view('Admin.page.villkor',compact('spela'));
        }
        if($id==11){
            return view('Admin.page.spelregler',compact('spela'));
        }
        if($id==12){
            return view('Admin.page.integritetspolicy',compact('spela'));
        }
        if($id==13){
            return view('Admin.page.cookie_policy',compact('spela'));
        }
        if($id==14){
            return view('Admin.page.spelmissbruk',compact('spela'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
       
        $spela=DB::table('page_contain')->where('id',$id)->first();
        if($request->contain_image==null)
        {
            $img=$spela->contain_image;
        }
        else{
            $img=saveFile($request,'contain_image');
        }
        if($request->page_banner==null)
        {
            $img1=$spela->page_banner;
        }
        else{
            $img1=saveFile($request,'page_banner');
        }
        if($request->sub_bannar==null)
        {
            $img2=$spela->sub_bannar;
        }
        else{
            $img2=saveFile($request,'sub_bannar');
        }
        $footer=DB::table('cms')->where('id',1)->first();
        if(request()->contact_image==null)
        {
            $img5=$footer->contact_image;
        }
        else{
            $img5=saveFile($request,'contact_image');
        }
        //dd($request->all());
        DB::table('page_contain')->where('id',$id)->update([
        'contain1'=>request()->contain1,
        'contain2'=>request()->contain2,
        'contain_image'=>$img,
        'page_banner'=>$img1,
        'banner_text'=>request()->banner_text,
        'text_link'=>request()->text_link,
        'sub_bannar_link'=>request()->sub_bannar_link,
        'sub_bannar'=>$img2,
        'btn_status'=>(request()->status)==null?0:1,
        'cdt'=>now()
    ]);
    // DB::table('cms')->where('id',1)->update([
    //     'contact_title'=>request()->contact_title, 	
    //     'contact_details'=>request()->contact_details, 	
    //     'contact_image'=>$img5, 
    // ]);
    return redirect()->route('admin.spelansvar.index')->with('message' , 'Update was successful!');
    }
}
