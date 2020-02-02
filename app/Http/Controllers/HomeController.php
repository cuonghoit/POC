<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;




use App\Model\course;
use App\Model\personal_info;
use App\Model\training_record;


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
        $personal_info = personal_info::where('user_id',$id)->first();
        $course_count = DB::table('course')->count();
        return view('IATP',['course_count'=>$course_count,'course'=>$course,'personal_info'=>$personal_info]);
    }
    public function postIATP($id, Request $request ){
        $this->validate($request,[
            'dateFrom' => 'required',
            'dateTo' => 'required',
            'course' => 'required',
            'us' => 'required'
        ],[
            'dateFrom.required' => 'Please select a training start date!',
            'dateTo.required' => 'Please select a training end date!',
            'course.required' => 'Please select 1 course',
            'us.required' => 'Please fill in Training Fee US'
        ]);
        if($request->DateFrom > $request->DateTo){
            return redirect()->back()->with('notice','Please select again Training & Development period from');
        }
        $month = json_encode($request->month);
        $training_record = new training_record;
        $training_record->user_id = $id;
        $training_record->course_id = $request->course;
        $training_record->training_purpose = $request->course_objectives;
        $training_record->training_type  = $request->course_type;
        $training_record->training_time_from = $request->dateFrom;
        $training_record->training_time_to = $request->dateTo;
        $training_record->training_location = $request->location;
        $training_record->course_fee = $request->us;
        $training_record->save();
        return redirect('IATP/$id')->with('thongbao','them thanh cong');

    }

    public function getGATP()
    {
        return view('GATP');
    }

}
