<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeysToManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('management', function (Blueprint $table) {
            $table->foreign('keeperID')->references('id')->on('keeper');
            $table->foreign('animalID')->references('id')->on('animal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('management', function (Blueprint $table) {
            //
        });
    }
}