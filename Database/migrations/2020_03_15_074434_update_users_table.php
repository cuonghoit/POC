<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('users')) {
            if(!Schema::hasColumn('users', 'objectguid')) {
                Schema::table('users', function (Blueprint $table)
                {
                    $table->string('objectguid')->nullable();
                    $table->string('samaccountname');
                    $table->string('username');
                    $table->string('userprincipalname');
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
