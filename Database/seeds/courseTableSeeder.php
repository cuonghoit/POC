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
         'course_name'=>'Certificated Scrum Master',
         'discipline'=>'1 year working for company',
         'course_type'=>'CSM',
         'course_duration'=>'1 month',
         'course_objectives'=>'Know About PMP',
         'course_outline'=>'N/A',
         'provider'=>'Scrum.org',
         'status'=>'1',
         'note'=>'note'
       ]);
        DB::table('course')->insert(
        [
         'course_name'=>'Project Manager Professional',
         'discipline'=>'3 year working for company',
         'course_type'=>'PMP',
         'course_duration'=>'3 month',
         'course_objectives'=>'Know About PMP',
         'course_outline'=>'N/A',
         'provider'=>'PMI',
        'status'=>'1',
        'note'=>'note'
       ]);
    }

}
