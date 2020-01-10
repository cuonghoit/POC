<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('user_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('sex');
            $table->date('birthday');
            $table->string('id_card');
            $table->string('nationality');
            $table->string('background');
            $table->string('education');
            $table->date('date_of_hire');
            $table->string('job_title');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('staff_number');
            $table->string('labor_contact_type');
            $table->string('labor_contact_number');
            $table->date('labor_contact_effective_date');
            $table->date('date_in_current_job_title');
            $table->tinyInteger('in_charge_of_training');
            $table->tinyInteger('internal_trainer');
            $table->string('training_discipline');
            $table->string('foreign_language_proficiency');
            $table->string('working_location');
            $table->string('department');
            $table->string('supervisor_name');
            $table->string('supervisor_email');
            $table->string('supervisor_job_title');
            $table->string('staff_role_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_info');
    }
}
