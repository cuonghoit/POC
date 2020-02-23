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






        $this->call(array(courseTableSeeder::class,
            personal_infoTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            training_recordTableSeeder::class,
            UsersSeeder::class,
            msc_performanceTableSeeder::class,
            rate_annual_performanceTableSeeder::class,
            rate_monthly_performance::class,
            statusTableSeeder::class));
    }
}


