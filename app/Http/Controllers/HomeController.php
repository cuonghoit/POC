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

    //training-management
    public function getCATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->get();
        return view('training_management.CATP',compact('personal_info'),compact('course'));

    }

    public function getDATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->get();
        return view('training_management.DATP',compact('personal_info'),compact('course'));
    }

     public function getIATP($id)
    {
        $course = course::all();

        $personal_info = personal_info::where('user_id',$id)->first();
        $course_count = DB::table('course')->count();
<<<<<<< HEAD
        return view('IATP',['course_count'=>$course_count,'course'=>$course,'personal_info'=>$personal_info]);

=======
        return view('training_management.IATP',['course_count'=>$course_count,'course'=>$course,'personal_info'=>$personal_info]);
>>>>>>> 9164f848e42091a992ba5e51f72f711cee9a2dd2
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



    public function getGATP()
    {
        return view('training_management.GATP');
    }

    //approve-training
    public function getADATP($id) {
        $course = course::all();
        $course_count = DB::table('course')->count();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('training_management.approve_training.ADATP',['course_count'=>$course_count,'course'=>$course,'personal_info'=>$personal_info]);

    }
    public function getAIATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('training_management.approve_training.AIATP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getAGATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('training_management.approve_training.AGATP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getACATP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
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
    public function getBMMMO($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMMMO',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getBMAMO($id){
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.building_my_msc_objectives.building_my_msc_objectives.BMAMO',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    //end-building-my-msc-objectives

    //approving-my-employees-msc-objectives
    public function getAMEAMO($id){
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.building_my_msc_objectives..approve_my_employees_msc_objectives.AMEAMO',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getAMEMMO($id){
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.building_my_msc_objectives..approve_my_employees_msc_objectives.AMEMMO',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    //end-approving-my-employees-msc-objectives
    //end-building-my-msc-objectives

    //performance-management
    //managing-company-performances
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
        return view('performance_management.performace_management/managing_employees_performances/EAPR', compact('personal_info'));
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
    public function getRMAP($id){
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.rating_my_performance.RMAP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getRMMP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.rating_my_performance.RMMP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    // end-rating-my-performance

    //approving-my-employees-performance
    public function getAMEAP($id) {
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.approving_my_employees_performance.AMEAP',['course'=>$course, 'personal_info'=>$personal_info]);
    }
    public function getAMEMP($id){
        $course = course::all();
        $personal_info = personal_info::where('user_id',$id)->first();
        return view('performance_management.rating_performance.approving_my_employees_performance.AMEMP',['course'=>$course, 'personal_info'=>$personal_info]);
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
}
