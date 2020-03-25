<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Model\course;
use App\Model\personal_info;
use App\Model\training_record;
use App\Model\rate_monthly_performance;
use App\Model\status;
use App\Model\rate_annual_performance;
use App\Model\training_request;
use App\Model\training_employee;
use Illuminate\Support\Facades\Auth;
use App\Model\msc_performance;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\Schema;
use App\Charts\Highcharts;
use PDF;

class HomeController extends Controller
{
    public const STATUS_PENDING = 1;
    public const STATUS_SUBMITED = 2;
    public const STATUS_APPROVED = 3;
    public const STATUS_REJECTED = 4;
    public const STATUS_COMPLETED = 5;
    public const STATUS_REVIEW = 6;
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
//        $user = Auth::user();
//        if(!$user->hasAnyRole('employees|department_managers|director|super-admin')) {
//            $user->assignRole('employees');
//        }
        return view('dashboard');
//        return redirect()->route('performaceManagementDashboard',Auth::user()->id);
    }

    //training-management
    public function getCATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('id',$id)->get();
        return view('training_management.CATP',compact('personal_info'),compact('course'));

    }

    public function getDATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('id',$id)->get();
        return view('training_management.DATP',compact('personal_info'),compact('course'));
    }

     public function getIATP($id)
    {
        $course = course::all();

        $personal_info = personal_info::where('id',$id)->first();
        $course_count = DB::table('course')->count();

        return view('training_management.IATP',['course_count'=>$course_count,'course'=>$course,'personal_info'=>$personal_info]);
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

        dd($month[]=$request->month);
        // dd($insert_data = json_encode($month));

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

    public function getTI($id){

        $training_request = training_request::where('user_id', $id)->first();
        $training_employees = training_employee::all();
        return view('training_management.TI',['training_request'=>$training_request, 'training_employees'=>$training_employees]);
    }
    public function getTR($id){

        $training_request = training_request::where('user_id', $id)->first();
        $training_employees = training_employee::all();
        return view('training_management.training_implementation.TR',['training_request'=>$training_request, 'training_employees'=>$training_employees]);
    }


    public function getGATP()
    {
        return view('training_management.GATP');
    }

    //approve-training
    public function getADATP($id) {
        $course = course::all();
        $course_count = DB::table('course')->count();
        $personal_info = personal_info::where('id',$id)->first();
        return view('training_management.approve_training.ADATP',['course'=>$course,'personal_info'=>$personal_info]);

    }
    public function getAIATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('id',$id)->first();
        return view('training_management.approve_training.AIATP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getAGATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('id',$id)->first();
        return view('training_management.approve_training.AGATP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getACATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('id',$id)->first();
        return view('training_management.approve_training.ACATP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    //end approve-training



    // training-implementation

    public function getCATPS()
    {
        return view('training_management.training_implementation.CATPS');
    }

    public function getCATPP()
    {
        return view('training_management.training_implementation.CATPP');
    }

    public function getPTEBP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('training_management.training_implementation.PTEBP',['course'=>$course, 'personal_info'=>$personal_info]);

    }

    public function getPTECR() {
        return view('training_management.training_implementation.PTECR');
    }
    // end training-implementation
    //end training-management

    //performance-management

    //building-my-msc-objecives
    //building-my-msc-objectives
    public function getBMPDP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMPDP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getBMMMO($id, Request $request) {
        $course = course::all();
        $users= personal_info::where('staff_role_id', 3)->get();
        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }
        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
        $year = date('Y-m');
        $department = '';

        if($this->isHR()) {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")
                ->join('status', 'status.id', '=', 'status')
                ->where('status', '<>', $this::STATUS_PENDING)
                ->where('status', '<>', $this::STATUS_SUBMITED)
                ->where('type', 1);

            if($request->isMethod('POST')) {
                $year = $request->input('dateFrom');
                $department = $request->input('department');
                if($year) {
                    $msc_performance = $msc_performance->where('month_year', 'like', $year."%");
                }
                if($department) {
//                    $msc_performance = $msc_performance->where('user_id', $department);
                }
            }
        } else {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'status.id', '=', 'status')->where('user_id',$id)->where('type', 1);

            if($request->isMethod('POST')) {
                $year = $request->input('dateFrom');
                if($year) {
                    $msc_performance = $msc_performance->where('month_year', 'like', $year."%");
                }
            }
        }

        $msc_performance =$msc_performance->where('year','like', $year."%");
        $msc_performance = $msc_performance->get();

        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMMMO',['course'=>$course, 'personal_info'=>$personal_info, 'msc_performance'=>$msc_performance,'users'=> $users, 'year' => $year, 'department_list' => $departmentList, 'department'=>$department]);
    }

    public function searchMscMonthly ($id, Request $request){
        $course = course::all();
        $users= personal_info::where('staff_role_id', 3)->get();
        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }
        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
        $year = '';
        $department = '';

        if($this->isHR()) {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('status', '<>', $this::STATUS_PENDING)->where('status', '<>', $this::STATUS_SUBMITED)->where('type', 1);
            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $department = $request->input('department');
                $msc_performance = $msc_performance->where('year', 'like', $year."%")->where('user_id', $department);
            }
        } else {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('user_id',$id)->where('type', 1);

            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $msc_performance = $msc_performance->where('year', 'like', $year."%");
            }
        }


        $msc_performance = $msc_performance->get();

        $personal_info = personal_info::where('user_id',$id)->first();
        if($request->isMethod('POST')) {
            $isPrintPdf = $request->input('isPrintPdf');
            if(strcmp($isPrintPdf, 'true') == 0 ) {
                $data= [
                    'course'=>$course,
                    'personal_info'=>$personal_info,
                    'msc_performance'=>$msc_performance,
                    'users'=>$users,
                    'year' => $year,
                    'department_list' => $departmentList
                ];
                $pdf = PDF::loadView('performance_management.building_my_msc_objectives.building_my_msc_objectives.pdf_BMAMO', $data)->setPaper('a4', 'landscape');
                return $pdf->download('msc_annual.pdf');
            }
        }

        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMMMO',['course'=>$course, 'personal_info'=>$personal_info, 'msc_performance'=>$msc_performance,'users'=>$users, 'year' => $year, 'department_list' => $departmentList, 'department'=>$department]);
    }

    public function getBMAMO($id, Request $request){
        $course = course::all();
        $users= personal_info::where('staff_role_id', 3)->get();
        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }
        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
        $year = now()->year;
        $department = '';

        if($this->isHR()) {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('status', '<>', $this::STATUS_PENDING)->where('status', '<>', $this::STATUS_SUBMITED)->where('type', 0);
            if($request->isMethod('POST')) {
                $year = $request->input('dateFrom');
                $department = $request->input('department');
                if($year) {
                    $msc_performance = $msc_performance->where('year', 'like', $year."%");
                }
                if($department) {
                    $userIds = $this->getUserIdsByDepartmentId($department);
                    $msc_performance = $msc_performance->whereIn('user_id', $userIds);
                }
            }
        } else {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('user_id',$id)->where('type', 0);

            if($request->isMethod('POST')) {
                $year = $request->input('dateFrom');
                if($year) {
                    $msc_performance = $msc_performance->where('year', 'like', $year."%");
                }
            }
        }


        $msc_performance = $msc_performance->where('year','like',$year."%");
        $msc_performance = $msc_performance->get();

        $personal_info = personal_info::where('user_id',$id)->first();
        if($request->isMethod('POST')) {
            $isPrintPdf = $request->input('isPrintPdf');
            if(strcmp($isPrintPdf, 'true') == 0 ) {
                $data= [
                    'course'=>$course,
                    'personal_info'=>$personal_info,
                    'msc_performance'=>$msc_performance,
                    'users'=>$users,
                    'year' => $year,
                    'department_list' => $departmentList
                ];
                $pdf = PDF::loadView('performance_management.building_my_msc_objectives.building_my_msc_objectives.pdf_BMAMO', $data)->setPaper('a4', 'landscape');
                return $pdf->download('msc_annual.pdf');
            }
        }

        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMAMO',['course'=>$course, 'personal_info'=>$personal_info, 'msc_performance'=>$msc_performance,'users'=>$users, 'year' => $year, 'department_list' => $departmentList, 'department'=>$department]);
    }

    public function searchMscAnnual ($id, Request $request){
        $course = course::all();
        $users= personal_info::where('staff_role_id', 3)->get();
        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }
        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
        $year = '';
        $department = '';

        if($this->isHR()) {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('status', '<>', $this::STATUS_PENDING)->where('status', '<>', $this::STATUS_SUBMITED)->where('type', 0);
            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $department = $request->input('department');
                if($year) {
                    $msc_performance = $msc_performance->where('year', 'like', $year."%");
                }
                if($department) {
                    $userIds = $this->getUserIdsByDepartmentId($department);
                    $msc_performance = $msc_performance->whereIn('user_id', $userIds);
                }

            }
        } else {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('user_id',$id)->where('type', 0);

            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $msc_performance = $msc_performance->where('year', 'like', $year."%");
            }
        }


        $msc_performance = $msc_performance->get();

        $personal_info = personal_info::where('user_id',$id)->first();
        if($request->isMethod('POST')) {
            $isPrintPdf = $request->input('isPrintPdf');
            if(strcmp($isPrintPdf, 'true') == 0 ) {
                $data= [
                    'course'=>$course,
                    'personal_info'=>$personal_info,
                    'msc_performance'=>$msc_performance,
                    'users'=>$users,
                    'year' => $year,
                    'department_list' => $departmentList
                ];
                $pdf = PDF::loadView('performance_management.building_my_msc_objectives.building_my_msc_objectives.pdf_BMAMO', $data)->setPaper('a4', 'landscape');
                return $pdf->download('msc_annual.pdf');
            }
        }

        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMAMO',['course'=>$course, 'personal_info'=>$personal_info, 'msc_performance'=>$msc_performance,'users'=>$users, 'year' => $year, 'department_list' => $departmentList, 'department'=>$department]);
    }



    //end-building-my-msc-objectives

    //approving-my-employees-msc-objectives
    public function getAMEAMO($id, Request $request){


        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }

        $msc_performance = msc_performance::join('status', 'status.id', '=', 'status')
            ->whereIn('user_id', $userIds)->where('type', 0)->where('status', $this::STATUS_SUBMITED);

        $year = '';
        $employee = '';
        if($request->isMethod('POST')) {
            $year = $request->input('dateFrom');
            $employee = $request->input('employee');
            if($year) {
                $msc_performance = $msc_performance->where('year', 'like', $year."%");
            }
            if($employee) {
                $msc_performance = $msc_performance->where('user_id', $employee);
            }
        }
        $msc_performance = $msc_performance->get();

        return view('performance_management.building_my_msc_objectives.approve_my_employees_msc_objectives.AMEAMO',['course'=>$course, 'personal_info'=>$personal_info, 'msc_performance' => $msc_performance, 'users'=>$users, 'year' => $year, 'employee' => $employee]);
    }
    public function getAMEMMO($id, Request $request){
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
        $msc_performance = msc_performance::join('status', 'status.id', '=', 'status')
            ->whereIn('user_id', $userIds)->where('type', 1)->where('status', $this::STATUS_SUBMITED);

        $year = '';
        $employee = '';
        if($request->isMethod('POST')) {
            $year = $request->input('dateFrom');
            $employee = $request->input('employee');
            if($year) {
                $msc_performance = $msc_performance->where('year', 'like', $year."%");
            }
            if($employee) {
                $msc_performance = $msc_performance->where('user_id', $employee);
            }
        }
        $msc_performance = $msc_performance->get();
        return view('performance_management.building_my_msc_objectives..approve_my_employees_msc_objectives.AMEMMO',['course'=>$course, 'personal_info'=>$personal_info, 'msc_performance' => $msc_performance, 'users'=>$users, 'year' => $year, 'employee' => $employee]);
    }
    //end-approving-my-employees-msc-objectives
    //end-building-my-msc-objectives

    //performance-management
    //managing-company-performances
    public function getPerformaceManagement($id, Request $request) {
        $users = '';
        $department = '';
        $year = date('Y');
        $employees = '';
        if($this->isHR()){
            $departmentList = personal_info::whereNotNull('department_id')->get();
            $departmentIds = array();
            foreach ($departmentList as $user) {
                if( !in_array($user->department_id, $departmentIds) ) {
                    $departmentIds[] = $user->department_id;
                }
            }
            $users = personal_info::whereIn('user_id', $departmentIds)->get();
        }else{
            $users= personal_info::where('department_id', $id)->get();
        }
        if($request->isMethod('POST')){
            $users_first = $request->input('user');
            $year = $request->input('year');
        }else{
            $users_first = $users->first();
            if($users_first){
                $users_first = $users_first->user_id;
            }
        }
        $rap = rate_annual_performance::where('user_id', $users_first)->where('date','like',$year.'%')->get();
        $bar = new Highcharts();
        $pie = new Highcharts();
        $data_bar = collect([]);
        $data_pie = collect([]);
        $rate_annual_performance = rate_annual_performance::where('user_id', $users_first)->where('date','like',$year.'%')->get();
        $data_pie->push($rate_poor = rate_annual_performance::where('user_id', $users_first)
        ->where('date','like',$year.'%')->where('monthly_performance_level','like','Improvement Opportunity')->count()/12*100);
        $data_pie->push($rate_avg = rate_annual_performance::where('user_id', $users_first)
        ->where('date','like',$year.'%')->where('monthly_performance_level','like','Meets Expectation')->count()/12*100);
        $data_pie->push($rate_good = rate_annual_performance::where('user_id', $users_first)
        ->where('date','like',$year.'%')->where('monthly_performance_level','like','Exceeds Expectation')->count()/12*100);
        $data_pie->push($rate_very_good = rate_annual_performance::where('user_id', $users_first)
        ->where('date','like',$year.'%')->where('monthly_performance_level','like','Exceeds many Expectation')->count()/12*100);
        $data_pie->push($rate_outstanding = rate_annual_performance::where('user_id', $users_first)
        ->where('date','like',$year.'%')->where('monthly_performance_level','like','Outstanding')->count()/12*100);

        foreach ($rate_annual_performance as $rate_aunnual){
            $data_bar->push($rate_aunnual->monthly_rate);
        }
        $bar->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $pie->labels(['Improvement Opportunity','Meets Expectation','Exceeds Expectation','Very Good','Outstanding']);

        $bar->dataset('Rate Annual', 'column', $data_bar);
        $bar->options([
            'yAxis'=> [ //--- Primary yAxis
                'title'=> [
                    'text'=> 'Mothnly rate'
                ],
                'max'=>'5',
            ],
        ]);

        $pie->dataset('Rate Annual', 'pie', $data_pie)->options([
            'chart'=> [
              'plotBackgroundColor'=> null,
              'plotBorderWidth'=> null,
              'plotShadow'=> false,
            ],
            'color' => ['red','#FF8C00','Violet','blue','green'],
            'tooltip'=> [
              'pointFormat'=> '{series.name}: <br>{point.percentage:.1f} %<br>value: {point.y}'
            ],
            'plotOptions'=> [
              'pie'=> [
                'dataLabels'=> [
                  'enabled'=> true,
                  'format'=> '<b>{point.name}</b>:<br>{point.percentage:.1f} %<br>value: {point.y}',
                ]
              ]
            ]
        ]);
        return view('performance_management/performance_management', ['bar' => $bar, 'pie'=>$pie, 'rap'=>$rap,'users'=>$users, 'employees'=>$employees, 'year'=>$year]);
    }

    public function getCMPR() {
        return view('performance_management.performance_management.managing_company_performances/CMPR');
    }

    public function getCMMPR() {
        return view('performance_management.performance_management.managing_company_performances/CMMPR');
    }

    public function getCAPR() {
        return view('performance_management.performance_management.managing_company_performances/CAPR');
    }

    public function getCMAPR() {
        return view('performance_management.performance_management.managing_company_performances/CMAPR');
    }

    public function getCMPR_FBL() {
        return view('performance_management.performance_management.managing_company_performances/CMPR_FBL');
    }

    public function getCAPR_FBL() {
        return view('performance_management.performance_management.managing_company_performances/CAPR_FBL');
    }

    public function getCMAPR_FBL() {
        return view('performance_management.performance_management.managing_company_performances/CMAPR_FBL');
    }
    //end managing-company-performances

    //managing-department-performances
    public function getDMPR() {
        return view('performance_management.performance_management.managing_department_performances/DMPR');
    }

    public function getDMMPR() {
        return view('performance_management.performance_management.managing_department_performances/DMMPR');
    }

    public function getDAPR() {
        return view('performance_management.performance_management.managing_department_performances/DAPR');
    }

    public function getDMAPR() {
        return view('performance_management.performance_management.managing_department_performances/DMAPR');
    }


    public function getDMPR_FBL() {
        return view('performance_management.performace_management/managing_department_performances/DMPR_FBL');
    }

    public function getDAPR_FBL() {
        return view('performance_management.performance_management.managing_department_performances/DAPR_FBL');
    }

    public function getDMAPR_FBL() {
        return view('performance_management.performance_management.managing_department_performances/DMAPR_FBL');
    }
    //end managing-department-performances

    //managing-employees-performances
    public function getEMPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_employees_performances/EMPR', compact('personal_info'));
    }

    public function getEMMPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_employees_performances/EMMPR', compact('personal_info'));
    }

    public function getEAPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_employees_performances/EAPR', compact('personal_info'));
    }

    public function getEMAPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_employees_performances/EMAPR', compact('personal_info'));
    }

    public function getEMMPR_FBL($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_employees_performances/EMMPR_FBL', compact('personal_info'));
    }

    public function getEMAPR_FBL($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performace_management/managing_employees_performances/EMAPR_FBL', compact('personal_info'));
    }
    //end managing-employees-performances

    //managing-my-performances
    public function getMMPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_my_performances/MMPR', compact('personal_info'));
    }

    public function getMMMPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_my_performances/MMMPR', compact('personal_info'));
    }

    public function getMAPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_my_performances/MAPR', compact('personal_info'));
    }

    public function getMMAPR($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_my_performances/MMAPR', compact('personal_info'));
    }

    public function getMMMPR_FBL($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_my_performances/MMMPR_FBL', compact('personal_info'));
    }

    public function getMMAPR_FBL($id) {
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.performance_management.managing_my_performances/MMAPR_FBL', compact('personal_info'));
    }
    //end managing-my-performances
    //end-performance-management

    //rating-performance
    //rating-my-performance
    public function getRMAP($id, Request $request){
        $course = course::all();

        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }

        $year = now()->year;
        $department = '';

        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
        if($this->isHR()) {
            $rate_annual_performance = rate_annual_performance::select("rate_annual_performance.*", "status.name")
                ->join('status', 'status.id', '=', 'status')
                ->where('status', '<>', $this::STATUS_PENDING)
                ->where('status', '<>', $this::STATUS_SUBMITED);
            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $department = $request->input('department');
                if($year) {
                    $rate_annual_performance = $rate_annual_performance->where('year', 'like', $year."%");
                }
                if($department) {
//                    $rate_annual_performance = $rate_annual_performance->where('user_id', $department);
                }
            }
        } else {
            $rate_annual_performance = rate_annual_performance::select("rate_annual_performance.*", "status.name")->join('status', 'status.id', '=', 'status')
                ->where('user_id',$id);

        }
        $rate_annual_performance = $rate_annual_performance->where('year', 'like', $year."%");
        $rate_annual_performance = $rate_annual_performance->get();
        $avg = 0;
        foreach ($rate_annual_performance as $rate){
            $avg += $rate->monthly_rate;
        }
        if(count($rate_annual_performance)) {
            $avg = $avg/count($rate_annual_performance);
        } else {
            $avg = 0;
        }

        if($avg<2.5){
            $monthly_performance_level = 'Improvement Opportunity';
        }
        if($avg<3 && $avg>=2.5){
            $monthly_performance_level = 'Meets Expectation';
        }
        if($avg<3.5 && $avg>=3){
            $monthly_performance_level = 'Exceeds Expectation';
        }
        if($avg<4.2 && $avg>=3.5){
            $monthly_performance_level = 'Exceeds many Expectation';
        }
        if($avg>=3.5){
            $monthly_performance_level = 'Outstanding';
        }

        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.rating_my_performance.RMAP',['course'=>$course, 'personal_info'=>$personal_info, 'rate_annual_performance'=>$rate_annual_performance,'avg'=>$avg, 'year' => $year, 'department_list' => $departmentList, 'department'=>$department,'monthly_performance_level'=>$monthly_performance_level]);
    }

    public function searchRMAP($id, Request $request){
        $course = course::all();
        $year = $request->input('year');
        $personal_info = personal_info::where('user_id',$id)->first();
        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        $department = '';
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }
        if($this->isHR()){
            $department = $request->input('department');
            $rate_annual_performance = rate_annual_performance::where('year','like' ,$year.'%')->where('user_id',$department)->get();
        }
        else{
            $rate_annual_performance = rate_annual_performance::where('year','like' ,$year.'%')->where('user_id',$id)->get();
        }
        $avg = 0;
        foreach ($rate_annual_performance as $rate){
            $avg += $rate->monthly_rate;
        }
        if($avg!= 0){
            $avg = $avg/count($rate_annual_performance);
        }
        return view('performance_management.rating_performance.rating_my_performance.RMAP',['course'=>$course, 'personal_info'=>$personal_info, 'rate_annual_performance'=>$rate_annual_performance,'avg'=>$avg,'year'=>$year, 'department_list'=>$departmentList,'department'=>$department]);
    }

    public function saveRMAP($id, Request $request){
        if($request->isMethod('post') && $request->has("id")) {
            $count = count($request->input("id"));
            $ids = $request->input("id");
//            $must_do_1 = $request->input('must_do_1');
//            $must_do_2 = $request->input('must_do_2');
//            $must_do_3 = $request->input('must_do_3'));
//            $must_do_4 = $request->input('must_do_4');
//            $should_do_1 = $request->input('should_do_1');
//            $should_do_2 = $request->input('should_do_2');
//            $could_do_1 = $request->input('could_do_1');
            $monthly_rate = $request->input('monthly_rate');

            for($i = 0; $i < $count; $i++) {
                $rate_annual_performance = rate_annual_performance::find($ids[$i]);
                if($rate_annual_performance->id) {
//                    $rate_annual_performance->monthly_rate = $monthly_rate[$i];
//                    if(isset($must_do_1[$i])){
//                        $rate_annual_performance->must_do_1 = 1;
//                    }else{
//                        $rate_annual_performance->must_do_1 = 0;
//                    }
//
//                    if(isset($must_do_2[$i])){
//                        $rate_annual_performance->must_do_2 = 1;
//                    }else{
//                        $rate_annual_performance->must_do_2 = 0;
//                    }
//
//                    if(isset($must_do_3[$i])){
//                        $rate_annual_performance->must_do_3 = 1;
//                    }else{
//                        $rate_annual_performance->must_do_3 = 0;
//                    }
//
//                    if(isset($must_do_4[$i])){
//                        $rate_annual_performance->must_do_4 = 1;
//                    }else{
//                        $rate_annual_performance->must_do_4 = 0;
//                    }
//
//                    if(isset($should_do_1[$i])){
//                        $rate_annual_performance->should_do_1 = 1;
//                    }else{
//                        $rate_annual_performance->should_do_1 = 0;
//                    }
//
//                    if(isset($should_do_2[$i])){
//                        $rate_annual_performance->should_do_2 = 1;
//                    }else{
//                        $rate_annual_performance->should_do_2 = 0;
//                    }
//                    if(isset($could_do_1[$i])){
//                        $rate_annual_performance->could_do_1 = 1;
//                    }else{
//                        $rate_annual_performance->could_do_1 = 0;
//                    }
                    if($monthly_rate[$i]<2.5){
                        $rate_annual_performance->monthly_performance_level = 'Improvement Opportunity';
                    }
                    if($monthly_rate[$i]<3 && $monthly_rate[$i]>=2.5){
                        $rate_annual_performance->monthly_performance_level = 'Meets Expectation';
                    }
                    if($monthly_rate[$i]<3.5 && $monthly_rate[$i]>=3){
                        $rate_annual_performance->monthly_performance_level = 'Exceeds Expectation';
                    }
                    if($monthly_rate[$i]<4.2 && $monthly_rate[$i]>=3.5){
                        $rate_annual_performance->monthly_performance_level = 'Exceeds many Expectation';
                    }
                    if($monthly_rate[$i]>=4.2){
                        $rate_annual_performance->monthly_performance_level = 'Outstanding';
                    }
                    // Set another data here
                    $rate_annual_performance->save();
                }
            }
        }


        return redirect()->route('RMAP',Auth::user()->id);
    }


    public function getRMMP($id, Request $request) {
        $course = course::all();

        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }

        $year = date('Y-m');
        $department = '';

        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();

        if($this->isHR()) {
            $rate_monthly_performance = rate_monthly_performance::select("rate_monthly_performance.*", "status.name")
                ->join('status', 'status.id', '=', 'status')
                ->where('status', '<>', $this::STATUS_PENDING)->where('status', '<>', $this::STATUS_SUBMITED);
            if($request->isMethod('POST')) {
                $year = $request->input('month_year');
                $department = $request->input('department');
                if($year) {
                    $rate_monthly_performance = $rate_monthly_performance->where('month_year', 'like', $year."%");
                }
                if($department) {
                    $rate_monthly_performance = $rate_monthly_performance->where('user_id', $department);
                }
            }
        } else {
            $rate_monthly_performance = rate_monthly_performance::select("rate_monthly_performance.*", "status.name")->join('status', 'status.id', '=', 'status')
                ->where('user_id',$id);
        }
        $rate_monthly_performance = $rate_monthly_performance->where('month_year','like', $year."%");
        $rate_monthly_performance = $rate_monthly_performance->get();

        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.rating_my_performance.RMMP',['course'=>$course, 'personal_info'=>$personal_info,'rate_monthly_performance'=>$rate_monthly_performance, 'department_list' => $departmentList, 'year' => $year, 'department'=>$department]);
    }
    public function saveRMMP($id, Request $request){
        if($request->isMethod('post') && $request->has("id")) {
            $count = count($request->input("id"));
            $ids = $request->input("id");
            $objective_and_milestone = $request->input('objective_and_milestone');
            $result = $request->input('result');
            $achieve = $request->input('achieve');
            $monthly_rate = $request->input('monthly_rate');

            for($i = 0; $i < $count; $i++) {
                $rate_monthly_performance = rate_monthly_performance::find($ids[$i]);
                if($rate_monthly_performance->id) {
                    $rate_monthly_performance->objective_and_milestone = $objective_and_milestone[$i];
                    $rate_monthly_performance->result = $result[$i];
                    $rate_monthly_performance->monthly_rate = $monthly_rate[$i];
                    if(isset($achieve[$i])){
                        $rate_monthly_performance->achieve = 1;
                    }else{
                        $rate_monthly_performance->achieve = 0;
                    }

                    if($monthly_rate[$i]<2.5){
                        $rate_monthly_performance->monthly_performance_level = 'Improvement Opportunity';
                    }
                    if($monthly_rate[$i]<3 && $monthly_rate[$i]>=2.5){
                        $rate_monthly_performance->monthly_performance_level = 'Meets Expectation';
                    }
                    if($monthly_rate[$i]<3.5 && $monthly_rate[$i]>=3){
                        $rate_monthly_performance->monthly_performance_level = 'Exceeds Expectation';
                    }
                    if($monthly_rate[$i]<4.2 && $monthly_rate[$i]>=3.5){
                        $rate_monthly_performance->monthly_performance_level = 'Exceeds many Expectation';
                    }
                    if($monthly_rate[$i]>=3.5){
                        $rate_monthly_performance->monthly_performance_level = 'Outstanding';
                    }
                    // Set another data here
                    $rate_monthly_performance->save();

                    //save annual
                    if($i == ($count-1)){
                         $this->saveAnnual($rate_monthly_performance->month_year, $id);
                    }
                }
            }
        }


        return redirect()->route('RMMP',Auth::user()->id);
    }

    public  function createRMMP($id, Request $request){
        $departmentList = personal_info::whereNotNull('department_id')->get();
        $departmentIds = array();
        foreach ($departmentList as $user) {
            if( !in_array($user->department_id, $departmentIds) ) {
                $departmentIds[] = $user->department_id;
            }
        }

        $department = '';

        $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
        if($request->isMethod('post')){
            $objective_category = ['Must_Do_1', 'Must_Do_2','Must_Do_3','Must_Do_4','Should_Do_1', 'Should_Do_2','Could_Do_1'];
            $objective_and_milestone = $request->input('objective_and_milestone');
            $result = $request->input('result');
            $achieve = $request->input('achieve');
            $monthly_rate = $request->input('monthly_rate');
            $year = $request->year;
            for($i = 0; $i < 7; $i++) {
                $rate_monthly_performance = new rate_monthly_performance();
                $rate_monthly_performance->user_id = $id;
                $rate_monthly_performance->month_year = $year;
                $rate_monthly_performance->status = 1;
                $rate_monthly_performance->objective_category = $objective_category[$i];
                $rate_monthly_performance->objective_and_milestone = $objective_and_milestone[$i];
                $rate_monthly_performance->result = $result[$i];
                $rate_monthly_performance->monthly_rate = $monthly_rate[$i];
                if(isset($achieve[$i])){
                    $rate_monthly_performance->achieve = 1;
                }else{
                    $rate_monthly_performance->achieve = 0;
                }

                if($monthly_rate[$i]<2.5){
                    $rate_monthly_performance->monthly_performance_level = 'Improvement Opportunity';
                }
                if($monthly_rate[$i]<3 && $monthly_rate[$i]>=2.5){
                    $rate_monthly_performance->monthly_performance_level = 'Average';
                }
                if($monthly_rate[$i]<3.5 && $monthly_rate[$i]>=3){
                    $rate_monthly_performance->monthly_performance_level = 'Meets Expectation';
                }
                if($monthly_rate[$i]<4.2 && $monthly_rate[$i]>=3.5){
                    $rate_monthly_performance->monthly_performance_level = 'Exceeds Expectation';
                }
                if($monthly_rate[$i]>=3.5){
                    $rate_monthly_performance->monthly_performance_level = 'Outstanding';
                }
                // Set another data here
                $rate_monthly_performance->save();

                //save annual
                if($i == 6){
                     $this->saveAnnual($rate_monthly_performance->month_year, $id);
                }
            }
        }
        $year = date('Y-m');
        if($this->isHR()) {
            $rate_monthly_performance = rate_monthly_performance::select("rate_monthly_performance.*", "status.name")
                ->join('status', 'status.id', '=', 'status')
                ->where('status', '<>', $this::STATUS_PENDING)->where('status', '<>', $this::STATUS_SUBMITED);
            if($request->isMethod('POST')) {
                $year = $request->input('month_year');
                $department = $request->input('department');
                if($year) {
                    $rate_monthly_performance = $rate_monthly_performance->where('month_year', 'like', $year."%");
                }
                if($department) {
                    $rate_monthly_performance = $rate_monthly_performance->where('user_id', $department);
                }
            }
        } else {
            $rate_monthly_performance = rate_monthly_performance::select("rate_monthly_performance.*", "status.name")->join('status', 'status.id', '=', 'status')
                ->where('user_id',$id);
        }
        $rate_monthly_performance = $rate_monthly_performance->where('month_year','like', $year."%");
        $rate_monthly_performance = $rate_monthly_performance->get();

        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.rating_my_performance.RMMP',[ 'personal_info'=>$personal_info,'rate_monthly_performance'=>$rate_monthly_performance, 'year'=>$year,'department'=>$department,'department_list'=>$departmentList]);
    }

    public function searchRMMP($id, Request $request){

        $course = course::all();
        $month_year = $request->input('month_year');
        $personal_info = personal_info::where('user_id',$id)->first();
        $department = '';
        $departmentList = '';
        if($this->isHR()) {
            $departmentList = personal_info::whereNotNull('department_id')->get();
            $departmentIds = array();
            foreach ($departmentList as $user) {
                if( !in_array($user->department_id, $departmentIds) ) {
                    $departmentIds[] = $user->department_id;
                }
            }
            $departmentList = personal_info::whereIn('user_id', $departmentIds)->get();
            $month_year = $request->input('month_year');
            $department = $request->input('department');
            $rate_monthly_performance = rate_monthly_performance::select("rate_monthly_performance.*", "status.name")->join('status', 'status.id', '=', 'status')
                ->where('user_id',$id);
            $rate_monthly_performance = $rate_monthly_performance->where('month_year','like' ,$month_year.'%')->get();
            if($request->isMethod('POST')) {
                    $year = $request->input('month_year');
                    $department = $request->input('department');
                }
        } else {
            $rate_monthly_performance = rate_monthly_performance::select("rate_monthly_performance.*", "status.name")->join('status', 'status.id', '=', 'status')
                ->where('user_id',$id);
            $rate_monthly_performance = $rate_monthly_performance->where('month_year','like' ,$month_year.'%')->get();
            if($request->isMethod('POST')) {
                    $year = $request->input('month_year');
                }
        }

        return view('performance_management.rating_performance.rating_my_performance.RMMP',['course'=>$course, 'personal_info'=>$personal_info,'rate_monthly_performance'=>$rate_monthly_performance, 'year'=>$year,'department'=>$department,'department_list'=>$departmentList]);
    }

    // end-rating-my-performance

    //approving-my-employees-performance
    public function getAMEAP($id) {
        $course = course::all();
        $userIds = array();
        $users= personal_info::where('department_id', $id)->get();
        $employee = '';
        $year = '';
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
        $rate_annual_performance = rate_annual_performance::join('status', 'status.id', '=', 'status')
            ->whereIn('user_id', $userIds)
            ->where('status', $this::STATUS_SUBMITED)
            ->get();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.approving_my_employees_performance.AMEAP',['course'=>$course, 'personal_info'=>$personal_info,'rate_annual_performance'=>$rate_annual_performance, 'users'=>$users,'employee'=>$employee,'year'=>$year]);
    }

    public function searchAMEAP($id, Request $request) {
        $course = course::all();
        $userIds = array();
        $users= personal_info::where('department_id', $id)->get();
        $year = $request->input('year');
        $employee =$request->input('employee');
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
//        $rate_annual_performance = rate_annual_performance::join('status', 'status.id', '=', 'status')
//            ->whereIn('user_id', $userIds)
//            ->where('status', $this::STATUS_SUBMITED)
//            ->get();
        $rate_annual_performance = rate_annual_performance::where('year','like' ,$year.'%')->where('user_id',$employee)->whereIn('user_id', $userIds)->where('status', $this::STATUS_SUBMITED)->get();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.approving_my_employees_performance.AMEAP',['course'=>$course, 'personal_info'=>$personal_info,'rate_annual_performance'=>$rate_annual_performance, 'users'=>$users,'employee'=>$employee, 'year'=>$year]);
    }

    public function getAMEMP($id){
        $course = course::all();
        $users= personal_info::where('department_id', $id)->get();
        $employee = '';
        $month_year = '';
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
        $rate_monthly_performance = rate_monthly_performance::join('status', 'status.id', '=', 'status')
            ->whereIn('user_id', $userIds)
            ->where('status', $this::STATUS_SUBMITED)
            ->get();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.approving_my_employees_performance.AMEMP',['course'=>$course, 'personal_info'=>$personal_info,'rate_monthly_performance'=>$rate_monthly_performance, 'users'=>$users, 'employee'=>$employee, 'month_year'=>$month_year]);
    }

    public function searchAMEMP($id, Request $request){
        $course = course::all();
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        $month_year = $request->input('month_year');
        $employee = $request->input('employee');
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
//        $rate_monthly_performance = rate_monthly_performance::join('status', 'status.id', '=', 'status')
//            ->whereIn('user_id', $userIds)
//            ->where('status', $this::STATUS_SUBMITED)
//            ->get();

        $rate_monthly_performance = rate_monthly_performance::where('month_year','like' ,$month_year.'%')->where('user_id',$employee)->whereIn('user_id', $userIds)->where('status', $this::STATUS_SUBMITED)->get();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.approving_my_employees_performance.AMEMP',['course'=>$course, 'personal_info'=>$personal_info,'rate_monthly_performance'=>$rate_monthly_performance, 'users'=>$users,'employee'=>$employee, 'month_year'=>$month_year]);
    }

    //end-approving-my-employees-performance
    //administrator
    //user-management

    public function getAddNewUserAccount(){
        return view('performance_management.administrator/user_management.addNewUserAccount');
    }

    public function getEditeUserAccount(){
        return view('performance_management.administrator/user_management.editeUserAccount');
    }

    public function getDeleteUserAccount(){
        return view('performance_management.administrator/user_management.deleteUserAccount');
    }

    public function isHR() {
        return $currentUser = Auth::user()->hasRole('general_director');
    }

    public function getCurrentUserStatus() {
        $status = array();
        $currentUser = Auth::user();
        $userRoles = $currentUser->getRoleNames();
        foreach ($userRoles as $role) {
            switch ($role) {
                case 'department_managers':
                    array_push($status, $this::STATUS_SUBMITED);
                    break;
                case 'director':
                    array_push($status, $this::STATUS_SUBMITED);
                    break;
                case 'general_director':
                    array_push($status, $this::STATUS_APPROVED);
                    break;
                default:
                    break;
            }
        }

        return $status;
    }

    public static function getStatus($status){
        $status_name = status::where('id', $status)->first();
        $status_name = $status_name->name;
        return $status_name;
        }

    public function submitMscMothy($id) {
        $msc_performance = msc_performance::where('user_id',$id)->where('type', 1)->where('status', $this::STATUS_PENDING)->get();
        foreach ($msc_performance as $msc) {
            $msc->status = $this::STATUS_SUBMITED;
            $msc->save();
        }

        return redirect()->route('BMMMO', ['id' => $id]);
    }

    public function submitMscAnnual($id) {
        $msc_performance = msc_performance::where('user_id',$id)->where('type', 0)->where('status', $this::STATUS_PENDING)->get();
        foreach ($msc_performance as $msc) {

            $msc->status = $this::STATUS_SUBMITED;
            $msc->save();
        }
        return redirect()->route('BMAMO', ['id' => $id]);
    }

    public function submitRateAnnual($id){
        $course = course::all();
        $rate_annual_performance = rate_annual_performance::where('user_id',$id)->where('status', $this::STATUS_PENDING)->get();
        foreach ($rate_annual_performance as $rate) {
            $rate->status = $this::STATUS_SUBMITED;
            $rate->save();
        }
        $rate_annual_performance = rate_annual_performance::where('user_id',$id)->get();
        $personal_info = personal_info::where('user_id',$id)->first();
        return redirect()->route('RMAP', ['id' => $id]);
    }
    public function submitRateMonthy($id, Request $request) {
        if($request->isMethod('post')){
            $objective_category = ['Must_Do_1', 'Must_Do_2','Must_Do_3','Must_Do_4','Should_Do_1', 'Should_Do_2','Could_Do_1'];
            $objective_and_milestone = $request->input('objective_and_milestone');
            $result = $request->input('result');
            $achieve = $request->input('achieve');
            $monthly_rate = $request->input('monthly_rate');
            $year = $request->year;
            for($i = 0; $i < 7; $i++) {
                $rate_monthly_performance = new rate_monthly_performance();
                $rate_monthly_performance->user_id = $id;
                $rate_monthly_performance->month_year = $year;
                $rate_monthly_performance->status = 1;
                $rate_monthly_performance->objective_category = $objective_category[$i];
                $rate_monthly_performance->objective_and_milestone = $objective_and_milestone[$i];
                $rate_monthly_performance->result = $result[$i];
                $rate_monthly_performance->monthly_rate = $monthly_rate[$i];
                if(isset($achieve[$i])){
                    $rate_monthly_performance->achieve = 1;
                }else{
                    $rate_monthly_performance->achieve = 0;
                }

                if($monthly_rate[$i]<2.5){
                    $rate_monthly_performance->monthly_performance_level = 'Improvement Opportunity';
                }
                if($monthly_rate[$i]<3 && $monthly_rate[$i]>=2.5){
                    $rate_monthly_performance->monthly_performance_level = 'Average';
                }
                if($monthly_rate[$i]<3.5 && $monthly_rate[$i]>=3){
                    $rate_monthly_performance->monthly_performance_level = 'Meets Expectation';
                }
                if($monthly_rate[$i]<4.2 && $monthly_rate[$i]>=3.5){
                    $rate_monthly_performance->monthly_performance_level = 'Exceeds Expectation';
                }
                if($monthly_rate[$i]>=3.5){
                    $rate_monthly_performance->monthly_performance_level = 'Outstanding';
                }
                // Set another data here
                $rate_monthly_performance->save();

                //save annual
                if($i == 6){
                     $this->saveAnnual($rate_monthly_performance->month_year, $id);
                }
            }
        }
        $rate_monthly_performance = rate_monthly_performance::where('user_id',$id)->where('status', $this::STATUS_PENDING)->get();
        foreach ($rate_monthly_performance as $rate) {
            $rate->status = $this::STATUS_SUBMITED;
            $rate->save();
        }
        return redirect()->route('RMMP', ['id' => $id]);
    }

    public function approveMyEmployeeMscAnnual($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }

        $msc_performance = msc_performance::whereIn('user_id', $userIds)->where('type', 0)->where('status', $this::STATUS_SUBMITED)->get();
        $comment = $request->input('comment');
        if ( !$comment ) {
            $comment = '';
        }

        foreach ($msc_performance as $msc) {
            $msc->status = $this::STATUS_APPROVED;
            $msc->note = $comment;
            $msc->save();
        }

        return redirect()->route('AMEAMO', ['id' => $id]);
    }

    public function approveMyEmployeeMscMonthly($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }

        $msc_performance = msc_performance::whereIn('user_id', $userIds)->where('type', 1)->where('status', $this::STATUS_SUBMITED)->get();
        $comment = $request->input('comment');
        if ( !$comment ) {
            $comment = '';
        }

        foreach ($msc_performance as $msc) {
            $msc->status = $this::STATUS_APPROVED;
            $msc->note = $comment;
            $msc->save();
        }

        return redirect()->route('AMEMMO', ['id' => $id]);
    }

    public function rejectMyEmployeeMscAnnual($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }

        $msc_performance = msc_performance::whereIn('user_id', $userIds)->where('type', 0)->where('status', $this::STATUS_SUBMITED)->get();
        $comment = $request->input('comment');
        if ( !$comment ) {
            $comment = '';
        }

        foreach ($msc_performance as $msc) {
            $msc->status = $this::STATUS_REJECTED;
            $msc->note = $comment;
            $msc->save();
        }

        return redirect()->route('AMEAMO', ['id' => $id]);
    }

    public function rejectMyEmployeeMscMonthly($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }

        $msc_performance = msc_performance::whereIn('user_id', $userIds)->where('type', 1)->where('status', $this::STATUS_SUBMITED)->get();
        $comment = $request->input('comment');
        if ( !$comment ) {
            $comment = '';
        }

        foreach ($msc_performance as $msc) {
            $msc->status = $this::STATUS_REJECTED;
            $msc->note = $comment;
            $msc->save();
        }

        return redirect()->route('AMEMMO', ['id' => $id]);
    }

    public function approveMyEmployeeRateAnnual($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        $comment = $request->input('comment');
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }

        $rate_annual_performance = rate_annual_performance::whereIn('user_id', $userIds)
            ->where('status', $this::STATUS_SUBMITED)
            ->get();

        foreach ($rate_annual_performance as $rate) {
            $rate->note = $comment;
            $rate->status = $this::STATUS_APPROVED;
            $rate->save();
        }

        return redirect()->route('AMEAP', ['id' => $id]);
    }

    public function approveMyEmployeeRateMonthly($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        $comment = $request->input('comment');
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
        $rate_monthly_performance = rate_monthly_performance::whereIn('user_id', $userIds)
            ->where('status', $this::STATUS_SUBMITED)
            ->get();

        foreach ($rate_monthly_performance as $rate) {
            $rate->note = $comment;
            $rate->status = $this::STATUS_APPROVED;
            $rate->save();
        }

        return redirect()->route('AMEMP', ['id' => $id]);
    }

    public function rejectMyEmployeeRateAnnual($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        $comment = $request->input('comment');
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
        $rate_annual_performance = rate_annual_performance::whereIn('user_id', $userIds)
            ->where('status', $this::STATUS_SUBMITED)
            ->get();

        foreach ($rate_annual_performance as $rate) {
            $rate->note = $comment;
            $rate->status = $this::STATUS_REJECTED;
            $rate->save();
        }

        return redirect()->route('AMEAP', ['id' => $id]);
    }

    public function rejectMyEmployeeRateMonthly($id, Request $request) {
        $users= personal_info::where('department_id', $id)->get();
        $userIds = array();
        $comment = $request->input('comment');
        foreach ($users as $user) {
            $userIds[] = $user->user_id;
        }
        $rate_monthly_performance = rate_monthly_performance::whereIn('user_id', $userIds)
            ->where('status', $this::STATUS_SUBMITED)
            ->get();

        foreach ($rate_monthly_performance as $rate) {
            $rate->note = $comment;
            $rate->status = $this::STATUS_REJECTED;
            $rate->save();
        }

        return redirect()->route('AMEMP', ['id' => $id]);
    }

    public function resetAllStatus() {
        $rate_monthly_performance = rate_monthly_performance::all();

        foreach ($rate_monthly_performance as $rate) {
            $rate->status = $this::STATUS_PENDING;
            $rate->save();
        }

        $rate_annual_performance = rate_annual_performance::all();

        foreach ($rate_annual_performance as $rate) {
            $rate->status = $this::STATUS_PENDING;
            $rate->save();
        }

        $msc_performance = msc_performance::all();

        foreach ($msc_performance as $msc) {
            $msc->status = $this::STATUS_PENDING;
            $msc->save();
        }

        return redirect('/');
    }

    public function saveAnnual($date, $id)
    {
        $date = date('Y-m', strtotime($date));
        $rate_annual_performance = rate_annual_performance::where('date', 'like', $date . '%')->where('user_id',$id)->first();
        $rate_monthly_performance = rate_monthly_performance::where('month_year', 'like', $date . '%')->where('user_id', $id)->get();
        $avg = 0;
        $count = rate_monthly_performance::where('month_year', 'like', $date . '%')->where('user_id', $id)->count();
        foreach ($rate_monthly_performance as $monthly) {
            $objective_category = $monthly->objective_category;
            $rate_annual_performance->$objective_category = $monthly->achieve;
            $avg += $monthly->monthly_rate;
        }
        $avg = $avg / $count;
        if ($avg < 2.5) {
            $rate_annual_performance->monthly_performance_level = 'Improvement Opportunity';
        }
        if ($avg < 3 && $avg >= 2.5) {
            $rate_annual_performance->monthly_performance_level = 'Meets Expectation';
        }
        if ($avg < 3.5 && $avg >= 3) {
            $rate_annual_performance->monthly_performance_level = 'Exceeds Expectation';
        }
        if ($avg < 4.2 && $avg >= 3.5) {
            $rate_annual_performance->monthly_performance_level = 'Exceeds many Expectation';
        }
        if ($avg >= 3.5) {
            $rate_annual_performance->monthly_performance_level = 'Outstanding';
        }
        $rate_annual_performance->monthly_rate = $avg;
        $rate_annual_performance->save();

    }

    public function unlockBMAMO($id, Request $request) {
        if($this->isHR()) {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('status', $this::STATUS_APPROVED)->where('type', 0);
            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $department = $request->input('department');
                if($year) {
                    $msc_performance = $msc_performance->where('year', 'like', $year."%");
                }
                if($department) {
                    $userIds = $this->getUserIdsByDepartmentId($department);
                    $msc_performance = $msc_performance->whereIn('user_id', $userIds);
                }

                $msc_performance = $msc_performance->get();

                foreach ($msc_performance as $msc) {
                    if($msc->status === $this::STATUS_APPROVED) {
                        $msc->status = $this::STATUS_PENDING;
                        $msc->save();
                    }
                }
            }
        }

        return redirect()->route('BMAMO',Auth::user()->id);
    }

    public function getUserIdsByDepartmentId($departmentIds) {
        $result = personal_info::select('user_id')->where('department_id', $departmentIds)->get();
        $userIds = array();
        foreach ($result as $row) {
            if( !in_array($row['user_id'], $userIds) ) {
                $userIds[] = $row['user_id'];
            }
        }

        return $userIds;
    }

    public function reviewRMAP($id, Request $request) {
        if($this->isHR()) {
            $msc_performance = msc_performance::select("msc_performance.*", "status.name")->join('status', 'msc_performance.status', '=', 'status.id')->where('status', $this::STATUS_APPROVED)->where('type', 0);
            if($request->isMethod('POST')) {
                $year = $request->input('year');
                $department = $request->input('department');
                if($year) {
                    $msc_performance = $msc_performance->where('year', 'like', $year."%");
                }
                if($department) {
                    $userIds = $this->getUserIdsByDepartmentId($department);
                    $msc_performance = $msc_performance->whereIn('user_id', $userIds);
                }

                $msc_performance = $msc_performance->get();

                foreach ($msc_performance as $msc) {
                    if($msc->status === $this::STATUS_APPROVED) {
                        $msc->status = $this::STATUS_PENDING;
                        $msc->save();
                    }
                }
            }
        }

        return redirect()->route('BMAMO',Auth::user()->id);
    }
}
