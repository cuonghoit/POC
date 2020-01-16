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
      	['user_id' => 1,
       	 'first_name'=>'Ho',
       	 'middle_name'=>'Thanh',
       	 'last_name'=>'Tung',
       	 'sex'=>'female',
       	 'birthday'=>'1998-09-29',
       	 'id_card'=>'PSF01',
       	 'nationality'=>'Viet Nam',
       	 'background'=>'IT',
       	 'education'=>'HCMUS',
       	 'date_of_hire'=>'2020-01-10',
       	 'job_title'=>'CEO',
       	 'email'=>'healer@gmail.com',
       	 'phone_number'=>'0981912638',
       	 'staff_number'=>'291998',
       	 'labor_contact_type'=>'3 years',
       	 'labor_contact_number'=>'91998',
       	 'labor_contact_effective_date'=>'2020-01-10',
       	 'date_in_current_job_title'=>'2020-01-15',
       	 'in_charge_of_training'=>'1',
       	 'internal_trainer'=>'1',
       	 'training_discipline'=>'N/A',
       	 'foreign_language_proficiency'=>'Eng',
       	 'working_location'=>'HCM',
       	 'department'=>'PFS-Software',
       	 'supervisor_name'=>'Thanh Tung',
       	 'supervisor_email'=>'thanhtungld@gmail.com',
       	 'supervisor_job_title'=>'CEO',
       	 'staff_role_id'=>'1'


       ]);
    }

}
