<?php

use Illuminate\Database\Seeder;

class statusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'name'=>'Pending'
        ]);

        DB::table('status')->insert([
            'name'=>'Submited'
        ]);

        DB::table('status')->insert([
            'name'=>'Approved'
        ]);

        DB::table('status')->insert([
            'name'=>'Rejected'
        ]);

        DB::table('status')->insert([
            'name'=>'Completed'
        ]);
    }
}
