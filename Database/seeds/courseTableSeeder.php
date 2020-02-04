<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert(
      	[
       	 'course_name'=>'Project Manager Professional',
       	 'discipline'=>'3 year working for company',
       	 'course_type'=>'PMP',
       	 'course_duration'=>'3 month',
       	 'course_objectives'=>'Know About PMP',
       	 'course_outline'=>'N/A',
       	 'provider'=>'PMI'

       ]);
    }
}
