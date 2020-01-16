<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'employees'])
        ->givePermissionTo(['create', 'edit', 'delete']);
        // this can be done as separate statements
        $role = Role::create(['name' => 'supervisors'])
            ->givePermissionTo(['create', 'edit', 'delete']);
        // this can be done as separate statements
        $role = Role::create(['name' => 'department_managers'])
            ->givePermissionTo(['create', 'edit', 'delete']);
        // this can be done as separate statements
        $role = Role::create(['name' => 'director'])
            ->givePermissionTo(['create', 'edit', 'delete']);
        // this can be done as separate statements
        $role = Role::create(['name' => 'general_director'])
            ->givePermissionTo(['create', 'edit', 'delete']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
