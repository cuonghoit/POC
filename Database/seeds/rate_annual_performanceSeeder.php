<?php

use Illuminate\Database\Seeder;

class rate_annual_performanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rate_annual_performance')->insert(
        	[
        		'user_id'=>'1',
        		'date'=>'2020-02-22',
        		'must_do_1'=>'must_do_1',
        		'must_do_2'=>'must_do_2',
        		'must_do_3'=>'must_do_3',
        		'must_do_4'=>'must_do_4',
        		'should_do_1'=>'should_do_1',
        		'should_do_2'=>'should_do_2',
        		'could_do_1'=>'could_do_1',
        		'monthly_rate'=>'1',
        		'monthly_performance_level'=>'good',
        		'type'=>'0',
        		'note'=>'Note',
        		'status'=>'1'
        	]);

        DB::table('rate_annual_performance')->insert(
        	[
        		'user_id'=>'1',
        		'date'=>'2020-02-22',
        		'must_do_1'=>'must_do_1',
        		'must_do_2'=>'must_do_2',
        		'must_do_3'=>'must_do_3',
        		'must_do_4'=>'must_do_4',
        		'should_do_1'=>'should_do_1',
        		'should_do_2'=>'should_do_2',
        		'could_do_1'=>'could_do_1',
        		'monthly_rate'=>'2',
        		'monthly_performance_level'=>'excellent',
        		'type'=>'1',
        		'note'=>'Note',
        		'status'=>'1'
        	]);

        DB::table('rate_annual_performance')->insert(
        	[
        		'user_id'=>'1',
        		'date'=>'2020-02-22',
        		'must_do_1'=>'must_do_1',
        		'must_do_2'=>'must_do_2',
        		'must_do_3'=>'must_do_3',
        		'must_do_4'=>'must_do_4',
        		'should_do_1'=>'should_do_1',
        		'should_do_2'=>'should_do_2',
        		'could_do_1'=>'could_do_1',
        		'monthly_rate'=>'3',
        		'monthly_performance_level'=>'excellent',
        		'type'=>'1',
        		'note'=>'Note',
        		'status'=>'1'
        	]);
    }
}
