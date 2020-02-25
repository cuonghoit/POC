<?php

use Illuminate\Database\Seeder;

class msc_performanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('msc_performance')->insert(
            [

                'user_id'=>'1',
                'objective_category'=>'Objective Annual Category 3',
                'milestone_behavior'=>'Milestone 3',
                'target_to_archive'=>'target_to_archive',
                'from_date'=>'2020-02-23',
                'to_date'=>'2020-04-23',
                'note'=>'note',
                'type'=>'0',
                'status'=>'1',
                'milestone'=>'milestone',
                'action_to_chieve'=>'action_to_chieve'
            ]);        
    }
}
