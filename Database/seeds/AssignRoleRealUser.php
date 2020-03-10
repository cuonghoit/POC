<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\personal_info;

class AssignRoleRealUser extends Seeder
{

    public $arrIdsExcept = array();
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addDeparmentRole();
        $this->addDirectSupervisorRole();
        $this->addBodRole();
        $this->addEmployeeRole();

    }

    public function addDeparmentRole() {
        $result = personal_info::
            select('department_id')
            ->distinct()
            ->whereNotNull('department_id')
            ->groupBy('department_id')
            ->get();

        $departmentIds = array();
        foreach ($result as $id) {
            if( !in_array($id['department_id'], $this->arrIdsExcept) ) {
                $this->arrIdsExcept[] = $id['department_id'];
            }
            $user = User::find($id['department_id']);
            $user->assignRole('department_managers');
        }
    }

    public function addDirectSupervisorRole() {
        $result = personal_info::
        select('direct_supervisor_id')
            ->distinct()
            ->whereNotNull('direct_supervisor_id')
            ->groupBy('direct_supervisor_id')
            ->get();

        $departmentIds = array();
        foreach ($result as $id) {
            if( !in_array($id['direct_supervisor_id'], $this->arrIdsExcept) ) {
                $this->arrIdsExcept[] = $id['direct_supervisor_id'];
            }
            $user = User::find($id['direct_supervisor_id']);
            $user->assignRole('supervisors');
        }
    }

    public function addBodRole() {
        $result = personal_info::
        select('bod_id')
            ->distinct()
            ->whereNotNull('bod_id')
            ->groupBy('bod_id')
            ->get();

        $departmentIds = array();
        foreach ($result as $id) {
            if( !in_array($id['bod_id'], $this->arrIdsExcept) ) {
                $this->arrIdsExcept[] = $id['bod_id'];
            }
            $user = User::find($id['bod_id']);
            $user->assignRole('general_director');
        }
    }

    public function addEmployeeRole() {
        $users = User::whereNotIn('id', $this->arrIdsExcept)->get();
        foreach ($users as $user) {
            $user->assignRole('employees');
        }
    }
}
