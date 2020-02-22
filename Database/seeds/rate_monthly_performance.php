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
        		'id'=>'1',
        		'user_id'=>'5',
        		'objective_category'=>'Must-Do 1',
        		'objective_and_milestone'=>'Cach_mang_thang_8',
        		'result'=>'Lose',
        		'achieve'=>'1',
        		'note'=>'Note',
        		'status'=>'1'
        	]);
    }
}
