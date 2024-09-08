<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting=DB::table('cms')->where('id',1)->first();
        $spela=DB::table('page_contain')->where('id',3)->first();
        $spelaC=DB::table('page_contain')->where('id',2)->first();
        return view('Admin.setting.edit',compact('setting','spela','spelaC'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $footer=DB::table('cms')->where('id',1)->first();
        if(request()->page_banner==null)
        {
            $page=$footer->page_banner;
        }
        else{
            $page=saveFile($request,'page_banner');
        }
        if(request()->sub_bannar==null)
        {
            $banner=$footer->sub_bannar;
        }
        else{
            $banner=saveFile($request,'sub_bannar');
        }
        if(request()->header_logo==null)
        {
            $logo=$footer->header_logo;
        }
        else{
            $logo=saveFile($request,'header_logo');
        }
        if(request()->header_logo_b==null)
        {
            $logo1=$footer->header_logo_b;
        }
        else{
            $logo1=saveFile($request,'header_logo_b');
        }
        if(request()->about_image==null)
        {
            $img=$footer->about_image;
        }
        else{
            $img=saveFile($request,'about_image');
        }
        if(request()->footer_image1==null)
        {
            $img1=$footer->footer_image1;
        }
        else{
            $img1=saveFile($request,'footer_image1');
        }
        if(request()->footer_image2==null)
        {
            $img2=$footer->footer_image2;
        }
        else{
            $img2=saveFile($request,'footer_image2');
        }
        if(request()->footer_image3==null)
        {
            $img3=$footer->footer_image3;
        }
        else{
            $img3=saveFile($request,'footer_image3');
        }
        if(request()->footer_image4==null)
        {
            $img4=$footer->footer_image4;
        }
        else{
            $img4=saveFile($request,'footer_image4');
        }
        if(request()->fav_logo==null)
        {
            $fav=$footer->fav_logo;
        }
        else{
            $fav=saveFile($request,'fav_logo');
        }
        if(request()->contact_image==null)
        {
            $img5=$footer->contact_image;
        }
        else{
            $img5=saveFile($request,'contact_image');
        }
        DB::table('cms')->where('id',1)->update([
            'header_logo'=>$logo,
            'header_logo_b'=>$logo1,	
            'fav_logo'=>$fav,
            'facebook'=>request()-> facebook,	
            'twitter'=>request()->twitter, 	
            'instragram'=>request()->instragram, 	
            'youtube'=>request()->youtube ,	
            'twich'=>request()->twich ,	
            'about_title'=>request()->about_title, 	
            'about_description'=>request()->about_description, 	
            'about_image'=>$img, 	
            'sub_bannar'=>$banner,
            'sub_bannar_link'=>request()->sub_bannar_link,
            'page_banner'=>$page,
            'mobile'=>request()->mobile, 	
            'email'=>request()-> email,	
            'whatapp'=>request()->whatapp, 	
            'page_contain1'=>request()->page_contain1,
            'page_contain2'=>request()->page_contain2,
            'pt1_option1_text'=>request()->pt1_option1_text, 	
            'pt1_option1_link'=>request()->pt1_option1_link, 	
            'pt1_option2_text'=>request()-> pt1_option2_text,	
            'pt1_option2_link'=>request()->pt1_option2_link, 	
            'pt1_option3_text'=>request()-> pt1_option3_text,	
            'pt1_option3_link'=>request()->pt1_option3_link, 	
            'pt1_option4_text'=>request()->pt1_option4_text, 	
            'pt1_option4_link'=>request()->pt1_option4_link, 	
            'pt1_option5_text'=>request()-> pt1_option5_text,	
            'pt1_option5_link'=>request()->pt1_option5_link,
            'pt1_option6_text'=>request()-> pt1_option6_text,	
            'pt1_option6_link'=>request()->pt1_option6_link, 	
            'pt2_option1_text'=>request()->pt2_option1_text, 	
            'pt2_option1_link'=>request()-> pt2_option1_link,	
            'pt2_option2_text'=>request()-> pt2_option2_text,
            'pt2_option2_link'=>request()->pt2_option2_link, 	
            'pt2_option3_text'=>request()-> pt2_option3_text,	
            'pt2_option3_link'=>request()->pt2_option3_link, 	
            'pt2_option4_text'=>request()->pt2_option4_text, 	
            'pt2_option4_link'=>request()->pt2_option4_link,	
            'pt2_option5_text'=>request()->pt2_option5_text, 	
            'pt2_option5_link'=>request()->pt2_option5_link,
            'pt2_option6_text'=>request()->pt2_option6_text, 	
            'pt2_option6_link'=>request()->pt2_option6_link,	
            'pt3_option1_text'=>request()->pt3_option1_text, 	
            'pt3_option1_link'=>request()->pt3_option1_link,
            'pt3_option2_text'=>request()->pt3_option2_text, 	
            'pt3_option2_link'=>request()->pt3_option2_link,	
            'pt3_option3_text'=>request()->pt3_option3_text, 	
            'pt3_option3_link'=>request()->pt3_option3_link,	
            'pt3_option4_text'=>request()->pt3_option4_text, 	
            'pt3_option4_link'=>request()->pt3_option4_link,	
            'pt3_option5_text'=>request()->pt3_option5_text ,	
            'pt3_option5_link'=>request()->pt3_option5_link,
            'pt3_option6_text'=>request()->pt3_option6_text ,	
            'pt3_option6_link'=>request()->pt3_option6_link,
            'footer_text1'=>request()->footer_text1, 	
            'footer_text2'=>request()->footer_text2 ,	
            'footer_image1'=>$img1, 	
            'footer_image2'=>$img2, 	
            'footer_image3'=>$img3, 	
            'footer_image4'=>$img4, 	
            'copy_right'=>request()->copy_right,
            'api'=>(request()->api==null)?0:1,
            'chat_bot'=>(request()->chat_bot==null)?0:1,
            'contact_title'=>request()->contact_title, 	
            'contact_details'=>request()->contact_details, 	
            'contact_image'=>$img5, 
            'about_contain_image'=>(request()->about_contain_image==null)?0:1,
            'contact_contain_image'=>(request()->contact_contain_image==null)?0:1,
        ]);
        activices('setting','update');
        $spela=DB::table('page_contain')->where('id',3)->first();
        if($request->Acontain_image==null)
        {
            $img=$spela->contain_image;
        }
        else{
            $img=saveFile($request,'Acontain_image');
        }
        if($request->Apage_banner==null)
        {
            $img1=$spela->page_banner;
        }
        else{
            $img1=saveFile($request,'Apage_banner');
        }
       
        //dd($request->all());
        DB::table('page_contain')->where('id',3)->update([
        'contain1'=>request()->Acontain1,
        'contain2'=>request()->Acontain2,
        'contain_image'=>$img,
        'page_banner'=>$img1,
        'banner_text'=>request()->Abanner_text,
        'text_link'=>request()->Atext_link,
        'btn_status'=>(request()->Astatus)==null?0:1,
        'cdt'=>now()
    ]);
    $spela=DB::table('page_contain')->where('id',2)->first();
        if($request->Ccontain_image==null)
        {
            $img=$spela->contain_image;
        }
        else{
            $img=saveFile($request,'Ccontain_image');
        }
        if($request->Cpage_banner==null)
        {
            $img1=$spela->page_banner;
        }
        else{
            $img1=saveFile($request,'Cpage_banner');
        }
       
        //dd($request->all());
        DB::table('page_contain')->where('id',2)->update([
        'contain1'=>request()->Ccontain1,
        'contain2'=>request()->Ccontain2,
        'contain_image'=>$img,
        'page_banner'=>$img1,
        'banner_text'=>request()->Cbanner_text,
        'text_link'=>request()->Ctext_link,
        'btn_status'=>(request()->Cstatus)==null?0:1,
        'cdt'=>now()
    ]);
        return redirect()->back()->with('message' , 'Update was successful!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
