<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeysToAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointmentHistory', function (Blueprint $table) {
            $table->foreign('animalID')->references('id')->on('animal');
            $table->foreign('keeperID')->references('id')->on('keeper');
            $table->foreign('consultantID')->references('id')->on('consultant');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointmentHistory', function (Blueprint $table) {
            //
        });
    }
}
