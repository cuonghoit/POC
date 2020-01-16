<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

      public function run()
    {
        $this->call(array(
            courseTableSeeder::class,
            personal_infoTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            UsersSeeder::class
        ));
    }

}
