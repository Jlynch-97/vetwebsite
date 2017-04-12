<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeepersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keeper', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 40);
            $table->string('lname', 40);
            $table->char('telenum', 20);
            $table->string('address', 60);
            $table->integer('animalID')->unsigned()->index();
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
        Schema::dropIfExists('keeper');
    }
}