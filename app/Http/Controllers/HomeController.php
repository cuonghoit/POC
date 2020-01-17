<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;




use App\Model\course;
use App\Model\personal_info;


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
    public function getCATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->get();

        return view('CATP',compact('personal_info'),compact('course'));

    }
    public function postCATP($id){
       
       
        $personal_info = personal_info::where('user_id',$id)->get();

        return view('CATP',compact('personal_info'));
    }
   


  
    public function getIATP($id)
    {
        $course = course::all();
        $course_count = DB::table('course')->count();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('IATP',['course_count'=>$course_count,'course'=>$course,'personal_info'=>$personal_info]);
    }
    public function postIATP(Request $request ){
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
