<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('staff_name');
            $table->text('position_department');
            $table->text('cost_pax');
            $table->text('employee_code');
            $table->date('staff_signature');
            $table->date('supervisor_approval'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_employee');
    }
}
