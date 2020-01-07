<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\course;
use App\personal_info;

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
        return view('home');
    }

    public function getIATP($staff)
    {
        $course = course::all();
        $personal_info = personal_info::where('Staff_Number',$staff)->first();
        return view('IATP',compact('course'), compact('personal_info'));
    }
}
