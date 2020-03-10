<?php

namespace App\Imports;

use App\personal_info;
use Maatwebsite\Excel\Concerns\ToModel;

class PersonalInfoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new personal_info([
            'user_id' => $row['UserId'],
            'department_id' => $row['DepartmentId'],
            'direct_supervisor_id' => $row['DirectSupervisorID'],
            'bod_id' => $row['BODID'],
            'first_name' => $row['FirstName'],
            'middle_name' => $row['MiddleName'],
            'last_name' => $row['LastName'],
            'date_of_hire' => $row['DateJoining'],
            'job_title' => $row['JobTitle'],
            'email' => $row['Email'],
            'staff_number' => $row['StaffNumber'],
            'working_location' => $row['WorkingLocation'],
            'department' => $row['Department'],
            'date_in_current_job_title' => $row['DateInCurrentPosition'],
        ]);
    }
}
