<?php

namespace App\Imports;

use App\Model\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['firstname'] . ' ' .$row['middlename'] . ' ' . $row['lastname'],
            'email' => $row['email'],
            'password' => Hash::make($row['email']),
        ]);
    }
}
