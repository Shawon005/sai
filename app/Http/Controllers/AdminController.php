<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('login');
    }
    /**tr
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $spel=DB::table('speltip')->where('status',1)->get();
        $blogs=DB::table('blogs')->where('blog_status',1)->get();
        $news=DB::table('news')->where('news_status',1)->get();
        return view('Admin.index2',compact('blogs','news','spel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       session('auth');
       session('id');
       $admin=DB::table('admin')->where('email',$request->username)->where('password',$request->password)->first();
       if($admin!=null)
        {
            session(['auth' => 'true']);  
            session(['id'=>$admin->id]);
            return redirect()->route('admin.dashbord');
        }
        else{
            session(['auth' => 'flase']);  
            return redirect()->back();
        }
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
    public function edit1()
    {
        $admin=DB::table('admin')->where('id',session('id'))->first();
        return view('Admin.admin_profile',compact('admin'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ads=DB::table('admin')->where('id',$id)->first();
        if($request->profile_image==null)
        {
            $img=$ads->profile_image;
        }
        else{
            $img=saveFile($request,'profile_image');
        }
  //dd($request->all());
        DB::table('admin')->where('id',$id)->update([
            
            'name'=>request()->name,
            'profile_image'=>$img,
            'email'=>request()->email,
            'mobile'=>request()->mobile,
            'twitter'=>request()->twitter,
            'facebook'=>request()->facebook,
            'whatsapp'=>request()->whatsapp,
            
        ]);
      
        return redirect()->route('admin.dashbord');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        session(['auth' => 'flase']);
        return redirect()->route('admin.login'); 
    }
    public function password(Request $request)
    {
        $admin=DB::table('admin')->where('id',session('id'))->first();
        if($admin->password==$request->old_pass)
        {
            DB::table('admin')->where('id',session('id'))->update([
            
                'password'=>request()->new_pass,
            ]);
          
            return redirect()->back()->with('message' , 'Passrod Change was successfully!');
    
        }
        else{
            return redirect()->back()->with('message' , 'Passrod Not Change!');
        }
    }

}
