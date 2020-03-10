<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['FirstName'] . ' ' .$row['MiddleName'] . ' ' . $row['LastName'],
            'email' => $row['Email'],
            'password' => Hash::make($row['Email']),
        ]);
    }
}
