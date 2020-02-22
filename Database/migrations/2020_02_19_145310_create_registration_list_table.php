<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('training_implementation') && Schema::hasTable('personal_info')){
            Schema::create('registration_list', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('training_implementation_id');
                $table->unsignedBigInteger('user_id');
                $table->timestamps();
                $table->foreign('training_implementation_id')->references('id')->on('training_implementation')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_list');
    }
}
