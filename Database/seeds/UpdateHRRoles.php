<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\personal_info;
use Illuminate\Support\Facades\Hash;

class UpdateHRRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::with(['roles' => function($q){
            $q->where('name', 'general_director');
        }])->get();
        foreach ($users as $user) {
            $user->assignRole('employees');
        }

        User::create([
            'name' => 'HRM',
            'email' => 'hris-admin@phuquocpoc.vn',
            'password' => Hash::make('hris-admin@phuquocpoc.vn'),
            'username' => 'hris-admin@phuquocpoc.vn',
            'userprincipalname' => 'hris-admin@phuquocpoc.vn',
        ])->assignRole('general_director');

        $userHR = User::where('email', 'hris-admin@phuquocpoc.vn')->first();
        if($userHR->id) {
            personal_info::create([
                'user_id' => $userHR->id,
                'first_name'=>'HR',
                'last_name'=>'Management',
                'date_of_hire'=>'2020-01-10',
                'job_title'=>'HRM',
                'email'=>'hris-admin@phuquocpoc.vn',
                'staff_number'=>'V0001',
            ]);
        }
    }
}
