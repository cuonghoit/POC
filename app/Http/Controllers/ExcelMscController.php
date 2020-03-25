<?php

namespace App\Http\Controllers;
use App\Model\ExcelMsc;
use App\Mail\TestMail;

use App\Http\Controllers\Controller;
use App\Exports\ExcelMscExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class ExcelMscController extends Controller
{
    public function export(Request $request)
    {

            global $data;
            $data = array([
            'Objective Category',
            'SMART Objectives and Monthly Milestone
                (MSC) (Verb/Objective/Timing/Result)',
            'Target to Achieve',
            'jan',
             'feb',
             'mar',
             'apr',
             'may',
             'jun',
             'jul',
             'aug',
             'sep',
             'oct',
             'nov',
             'dec',
            'note'
                    ]);
            if(is_null($request->input('id'))){
                return redirect()->route('BMAMO',Auth::user()->id)->with('notice','Nothing Data!!!');
            }

            $objective_category = $request->input('objective_category');
            $milestone = $request->input("milestone");
            $target = $request->input("target");
            $jan = $request->input("jan");
            $feb = $request->input("feb");
            $mar = $request->input("mar");
            $apr = $request->input("apr");
            $may = $request->input("may");
            $jun = $request->input("jun");
            $jul = $request->input("jul");
            $aug = $request->input("aug");
            $sep = $request->input("sep");
            $oct = $request->input("oct");
            $nov = $request->input("nov");
            $dec = $request->input("dec");
            $note = $request->input('note');
            $id = $request->input('id');
            $count = 0;
            if($id) {
                $count = count($id);
            }
            for($i = 0; $i < $count; $i++){
            echo $milestone[$i];
                $newdata=array([
                    'objective_category'=>$objective_category[$i],
                    'milestone'=>$milestone[$i],
                    'target'=>$target[$i],
                    'jan'=>$jan[$i],
                    'feb'=>$feb[$i],
                    'mar'=>$mar[$i],
                    'apr'=>$apr[$i],
                    'may'=>$may[$i],
                    'jun'=>$jun[$i],
                    'jul'=>$jul[$i],
                    'aug'=>$aug[$i],
                    'sep'=>$sep[$i],
                    'oct'=>$oct[$i],
                    'nov'=>$nov[$i],
                    'dec'=>$dec[$i],
                    'note'=>$note[$i]
                ]);
                array_push($data,$newdata);
            }
            ob_end_clean();
            ob_start();
            return (new ExcelMscExport($data));
    }

}
