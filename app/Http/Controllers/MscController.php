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
use Illuminate\Support\Facades\Auth;
use App\Model\msc_performance;
use PHPUnit\Framework\Constraint\Count;

class MscController extends Controller
{
    public const STATUS_PENDING = 1;
    public const STATUS_SUBMITED = 2;
    public const STATUS_APPROVED = 3;
    public const STATUS_REJECTED = 4;
    public const STATUS_COMPLETED = 5;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveMscAnnual($id, Request $request) {
        if($request->isMethod('post') && $request->has("id")) {
            $count = count($request->input("id"));

            $ids = $request->input("id");
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

            for($i = 0; $i < $count; $i++) {
                $mscPerformance = msc_performance::find($ids[$i]);
                if($mscPerformance->id) {
                    $mscPerformance->milestone_behavior = $milestone[$i];
                    $mscPerformance->target_to_archive = $target[$i];
                    $mscPerformance->jan = $jan[$i];
                    $mscPerformance->feb = $feb[$i];
                    $mscPerformance->mar = $mar[$i];
                    $mscPerformance->apr = $apr[$i];
                    $mscPerformance->may = $may[$i];
                    $mscPerformance->jun = $jun[$i];
                    $mscPerformance->jul = $jul[$i];
                    $mscPerformance->aug = $aug[$i];
                    $mscPerformance->sep = $sep[$i];
                    $mscPerformance->oct = $oct[$i];
                    $mscPerformance->nov = $nov[$i];
                    $mscPerformance->dec = $dec[$i];


                    // Set another data here
                    $mscPerformance->save();
                }
            }
        } else {
            $this->createMscAnnual($id, $request);
        }

        return redirect()->route('BMAMO', ['id' => $id]);
    }

    public function createMscAnnual($id, $request) {
        if($request->isMethod('post')) {
            $count = 7;

            $objectiveCategory = $request->input("objective_category");
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

            $year = $request->input('year_choosen');
            $year = $year . '/01/01';
            $date = date_create($year);
            $strYear = date_format($date,"Y/m/d");

            for($i = 0; $i < $count; $i++) {
                $mscPerformance = new msc_performance();
                $mscPerformance->user_id = Auth::user()->id;
                $mscPerformance->objective_category = $objectiveCategory[$i];
                $mscPerformance->milestone_behavior = $milestone[$i];
                $mscPerformance->target_to_archive = $target[$i];
                $mscPerformance->jan = $jan[$i];
                $mscPerformance->feb = $feb[$i];
                $mscPerformance->mar = $mar[$i];
                $mscPerformance->apr = $apr[$i];
                $mscPerformance->may = $may[$i];
                $mscPerformance->jun = $jun[$i];
                $mscPerformance->jul = $jul[$i];
                $mscPerformance->aug = $aug[$i];
                $mscPerformance->sep = $sep[$i];
                $mscPerformance->oct = $oct[$i];
                $mscPerformance->nov = $nov[$i];
                $mscPerformance->dec = $dec[$i];
                $mscPerformance->year = $strYear;
                $mscPerformance->month_year = $strYear;
                $mscPerformance->status = $this::STATUS_PENDING;
                $mscPerformance->type = 0;

                // Set another data here
                $mscPerformance->save();
            }
        }

        return redirect()->route('BMAMO', ['id' => $id]);
    }

    public function saveMscMonthly($id,Request $request) {
        if($request->isMethod('post')) {
            $ids = $request->input("id");
            if($ids) {
                $count = count($request->input("id"));
            } else {
                $count = 7;
            }

            $milestone = $request->input("milestone");
            $target = $request->input("target");
            $action_to_chieve = $request->input('action_to_chieve');
            if($ids && $request->has("id")) {
                for($i = 0; $i < $count; $i++) {
                    $mscPerformance = msc_performance::find($ids[$i]);
                    if($mscPerformance->id) {
                        $mscPerformance->milestone_behavior = $milestone[$i];
                        $mscPerformance->target_to_archive = $target[$i];
                        $mscPerformance->action_to_chieve = $action_to_chieve[$i];
                        // Set another data here
                        $mscPerformance->save();

                    }
                }
            } else {
                for($i = 0; $i < $count; $i++) {
                    $objectiveCategory = $request->input('objective_category');
                    $year = $request->input('year_choosen');
                    $date = date_create($year);
                    $year = date_format($date,"Y/m/d");

                    $mscPerformance = new msc_performance();

                    $mscPerformance->user_id = Auth::user()->id;
                    $mscPerformance->objective_category = $objectiveCategory[$i];
                    $mscPerformance->milestone_behavior = $milestone[$i];
                    $mscPerformance->target_to_archive = $target[$i];
                    $mscPerformance->action_to_chieve = $action_to_chieve[$i];
                    $mscPerformance->status = $this::STATUS_PENDING;
                    $mscPerformance->year = $year;
                    $mscPerformance->month_year = $year;
                    $mscPerformance->type = 1;
                    // Set another data here
                    $mscPerformance->save();
                }
            }
        }

        return redirect()->route('BMMMO', ['id' => $id]);
    }
}
