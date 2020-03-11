<?php

namespace App\Imports;

use App\Model\personal_info;
use App\Model\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonalInfoImport implements ToModel, WithHeadingRow
{
    public $userMap = array();
    public function __construct()
    {
        $this->getAllUserMap();
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $userId = $this->getUserIdByEmail($row['email']);
        $departmentId = $this->getUserIdByEmail($row['supervisorid']);
        $directSupervisorId = $this->getUserIdByEmail($row['directsupervisorid']);
        $bodId = $this->getUserIdByEmail($row['bodid']);
        return new personal_info([
            'user_id' => $userId,
            'department_id' => $departmentId,
            'direct_supervisor_id' => $directSupervisorId,
            'bod_id' => $bodId,
            'first_name' => $row['firstname'],
            'middle_name' => $row['middlename'],
            'last_name' => $row['lastname'],
            'date_of_hire' => $row['datejoining'],
            'job_title' => $row['jobtitle'],
            'email' => $row['email'],
            'staff_number' => $row['staffnumber'],
            'working_location' => $row['workinglocation'],
            'department' => $row['department'],
            'date_in_current_job_title' => $row['dateincurrentposition'],
        ]);
    }

    public function getAllUserMap() {
        $this->userMap = User::select('id', 'email')->get();
    }

    public function getUserIdByEmail($email) {
        foreach ($this->userMap as $data) {
            if(strcmp($data['email'], $email) === 0) {
                return $data['id'];
            }
        }

        return null;
    }
}
