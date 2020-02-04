<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        User::create([
            'name' => 'Employees User',
            'email' => 'employees@ihrdc.com',
            'password' => Hash::make('123456'),
        ])->assignRole('employees');

        User::create([
            'name' => 'Supervisors User',
            'email' => 'supervisors@ihrdc.com',
            'password' => Hash::make('123456'),
        ])->assignRole('supervisors');

        User::create([
            'name' => 'Department Managers User',
            'email' => 'department_managers@ihrdc.com',
            'password' => Hash::make('123456'),
        ])->assignRole('department_managers');

        User::create([
            'name' => 'Director User',
            'email' => 'director@ihrdc.com',
            'password' => Hash::make('123456'),
        ])->assignRole('director');

        User::create([
            'name' => 'General Director User',
            'email' => 'general_director@ihrdc.com',
            'password' => Hash::make('123456'),
        ])->assignRole('general_director');

        User::create([
            'name' => 'SuperAdmin User',
            'email' => 'super-admin@ihrdc.com',
            'password' => Hash::make('123456'),
        ])->assignRole('super-admin');
    }
}
