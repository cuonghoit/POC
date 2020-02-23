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
      	['user_id' => '1',
       	 'first_name'=>'Ho',
       	 'middle_name'=>'Bien',
       	 'last_name'=>'Cuong',
       	 'sex'=>'male',
       	 'birthday'=>'1999-10-25',
       	 'id_card'=>'PSF01',
       	 'nationality'=>'Viet Nam',
       	 'background'=>'IT',
       	 'education'=>'HCMUS',
       	 'date_of_hire'=>'2020-01-10',
       	 'job_title'=>'CEO',
       	 'email'=>'cuong251099@gmail.com',
       	 'phone_number'=>'0981961802',
       	 'staff_number'=>'251999',
       	 'labor_contact_type'=>'3 years',
       	 'labor_contact_number'=>'101999',
       	 'labor_contact_effective_date'=>'2020-01-10',
       	 'date_in_current_job_title'=>'2020-01-15',
       	 'in_charge_of_training'=>'1',
       	 'internal_trainer'=>'1',
       	 'training_discipline'=>'N/A',
       	 'foreign_language_proficiency'=>'Eng',
       	 'working_location'=>'HCM',
       	 'department'=>'PFS-Software',
       	 'supervisor_name'=>'Cuong Ken',
       	 'supervisor_email'=>'cuong251099@gmail.com',
       	 'supervisor_job_title'=>'CEO',
       	 'staff_role_id'=>'1',
         'note'=>'note',
         'status'=>'1'
       ]);
    }

}
