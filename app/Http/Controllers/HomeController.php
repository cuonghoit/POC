<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\DB;
use App\course;
use App\personal_info;
use App\training_record;
=======
use App\Model\course;
use App\Model\personal_info;
>>>>>>> a3d0afe0a220af5e88d7d47b8376a329db6f2be4

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

    public function CATP($staff){
        $course = course::all();
       
        $personal_info = personal_info::where('Staff_Number',$staff)->first();

        return view('CATP',compact('course'), compact('personal_info'));
    }
   


    public function getIATP($staff)
    {
        $course = course::all();
     
        $personal_info = personal_info::where('Staff_Number',$staff)->first();
        return view('IATP',compact('course'), compact('personal_info'));
    }
    public function postIATP(Request $request){
        $this->validate($request,[
            'dateFrom' => 'required',
            'dateTo' => 'required',
            'course' => 'required',
        ],[
            'dateFrom.required' => 'Please select a training start date!',
            'dateTo.required' => 'Please select a training end date!',
            'course.required' => 'Please select 1 course'
        ]);
        dd($month[]=$request->month);
        // dd($insert_data = json_encode($month));
        if($request->DateFrom > $request->DateTo){
            return redirect()->back()->with('notice','Please select again Training & Development period from');
        }
        // $course_id = $request->course;
        // $us = $request->us.$course_id;
    }

}
