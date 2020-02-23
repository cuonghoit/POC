<?php

use Illuminate\Database\Seeder;

class rate_monthly_performance extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rate_monthly_performance')->insert(
        	[
        		'id'=>'2',
        		'user_id'=>'7',
        		'objective_category'=>'Must-Do 2',
        		'objective_and_milestone'=>'Cach_mang_thang_8',
        		'result'=>'Victory',
        		'achieve'=>'2',
        		'note'=>'Note',
        		'status'=>'1'
        	],
            [
                'id'=>'3',
                'user_id'=>'10',
                'objective_category'=>'Must-Do 3',
                'objective_and_milestone'=>'Tang truog kinh te',
                'result'=>'Lose',
                'achieve'=>'2',
                'note'=>'Note',
                'status'=>'1'
            ],
            [
                'id'=>'4',
                'user_id'=>'8',
                'objective_category'=>'Could-Do 2',
                'objective_and_milestone'=>'Cong nghe hoa',
                'result'=>'Victory',
                'achieve'=>'2',
                'note'=>'Note',
                'status'=>'3'
            ]);
    }
        
}
