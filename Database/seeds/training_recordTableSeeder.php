<?php

use Illuminate\Database\Seeder;

class training_recordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_record')->insert(
        	['user_id'=>'10',
        	 'course_id'=>'1',
        	 'training_purpose'=>'Career Development',
        	 'training_type'=>'master',
        	 'training_time_from'=>'2020-01-10',
        	 'training_time_to'=>'2020-05-10',
        	 'training_location'=>'Los Angeles',
        	 'course_fee'=>'15000',
        	 'traveling_cost'=>'1000',
        	 'accommodation_cost'=>'3000',
        	 'training_approval_status'=>'1',
        	 'training_progress'=>'Not started',
        	 'assigned_by'=>'PHU QUOC PETROLEUM OPERATING COMPANY',
        	 'training_budget_resources'=>'',
        	 'training_assignment_number'=>'2020-01-10',
        	 'training_assignment_date'=>'2020-01-10',
        	 'training_cost_estimation_number'=>'20000',
        	 'training_cost_estimation_date'=>'2020-01-10',
        	 'training_tost_for_reFund'=>'10000'


        ]);
    }
}
