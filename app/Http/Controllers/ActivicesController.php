<?php

namespace App\Http\Controllers;
use DB;
use Str;
use Illuminate\Http\Request;

class ActivicesController extends Controller
{
    
    public function index()
    {
        //
        $Activicess=DB::table('activices')->get();
        return view('Admin.activices.index',compact('Activicess'));
    }

    /**
     * Show the form for creating a new resource.
     */
 
    
}
