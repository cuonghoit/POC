<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsNoteStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->string('note')->after('provider');
            $table->bigInteger('status')->after('provider');
        });
        Schema::table('personal_info', function (Blueprint $table) {
            $table->string('note')->after('staff_role_id');
            $table->bigInteger('status')->after('staff_role_id');
        });
        Schema::table('training_record', function (Blueprint $table) {
            $table->string('note')->after('training_tost_for_rerund');
            $table->bigInteger('status')->after('training_tost_for_rerund');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('columns_note_status');
    }
}
