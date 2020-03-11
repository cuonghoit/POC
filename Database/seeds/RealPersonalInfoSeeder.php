<?php

use App\Imports\PersonalInfoImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class RealPersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new PersonalInfoImport(), 'public/csv/userinfo.csv');
    }
}
