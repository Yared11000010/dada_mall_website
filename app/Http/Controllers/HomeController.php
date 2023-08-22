<?php

namespace App\Http\Controllers;

use App\Models\alama;
use App\Models\banner;
use App\Models\blog;
use App\Models\isetoch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function wellcome(){

        $allblog=blog::all();
        $allbanner=banner::all();
        return view('welcome',compact('allbanner','allblog'));
    }
}
