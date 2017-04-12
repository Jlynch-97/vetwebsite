<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('consultations');
            $table->integer('animalID')->unsigned()->index();
            $table->integer('keeperID')->unsigned()->index();
            $table->rememberToken();
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
        Schema::dropIfExists('consultant');
    }
}
