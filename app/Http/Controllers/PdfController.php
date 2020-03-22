<?php

namespace App\Http\Controllers;

use App\Model\personal_info;
use App\Model\training_employee;
use App\Model\training_request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use PDF;

class PdfController extends Controller
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

    public function printPerformanceReport() {
        $data = array();
        $pdf = PDF::loadView('performance_management/pdf_performance_management', $data)->setPaper('a4', 'landscape');
        return $pdf->download('performance_management_report.pdf');
    }

    public  function printTrainingRequest(){
        $data = array();
        $pdf = PDF::loadView('training_management/pdf_training_request', $data)->setPaper('a4', 'landscape');
        return $pdf->download('training_request.pdf');
    }

    public  function  printTrainingEvaluation($id){
        $data = array();
        $personal_info = personal_info::where('user_id', $id)->first();
        $pdf = PDF::loadView('training_management/training_implementation/pdf_post_training_evaluation', $data,['personal_info'=>$personal_info])->setPaper('a4', 'landscape');
        return $pdf->download('Post_training_evaluetion.pdf');
    }
}

