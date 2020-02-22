<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
;

class personal_infoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       DB::table('personal_info')->insert(
        ['user_id' => '10',
         'first_name'=>'Nguyen',
         'middle_name'=>'Hai',
         'last_name'=>'Duong',
         'sex'=>'female',
         'birthday'=>'1980-12-01',
         'id_card'=>'PSF01',
         'nationality'=>'Laos',
         'background'=>'Killer',
         'education'=>'12/12',
         'date_of_hire'=>'2020-01-10',
         'job_title'=>'General Director User',
         'email'=>'vanluyen@gmail.com',
         'phone_number'=>'0909209902',
         'staff_number'=>'291980',
         'labor_contact_type'=>'20 years',
         'labor_contact_number'=>'124524',
         'labor_contact_effective_date'=>'2020-01-10',
         'date_in_current_job_title'=>'2020-01-15',
         'in_charge_of_training'=>'1',
         'internal_trainer'=>'1',
         'training_discipline'=>'N/A',
         'foreign_language_proficiency'=>'EPN',
         'working_location'=>'HCM',
         'department'=>'PFS-Software',
         'supervisor_name'=>'Hai Duong',
         'supervisor_email'=>'haiduong@gmail.com',
         'supervisor_job_title'=>'Director',
         'staff_role_id'=>'1'
       ]);
    }

}
