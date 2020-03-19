<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UpdateSupervisorsRolesToDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::with(['roles' => function($q){
            $q->where('name', 'supervisors');
        }])->get();
        foreach ($users as $user) {
            $user->assignRole('department_managers');
        }
    }
}
