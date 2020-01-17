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
       	 'course_name'=>'Certificaed Scrum Master',
       	 'discipline'=>'1 year working for company',
       	 'course_type'=>'CSM',
       	 'course_duration'=>'1 month',
       	 'course_objectives'=>'Know About Scrum',
       	 'course_outline'=>'N/A',
       	 'provider'=>'Scrum.org'

       ]);
    }
}
