<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalInfoUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('personal_info')) {
            if(!Schema::hasColumn('personal_info', 'bod_id')) {
                Schema::table('personal_info', function (Blueprint $table)
                {
                    $table->unsignedBigInteger('direct_supervisor_id');
                });
            }
            if(!Schema::hasColumn('personal_info', 'bod_id')) {
                Schema::table('personal_info', function (Blueprint $table)
                {
                    $table->unsignedBigInteger('bod_id');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
