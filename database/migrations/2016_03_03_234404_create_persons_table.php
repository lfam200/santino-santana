<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('avatar');
            $table->string('sex');
            $table->date('birthday');
            $table->string('city');
            $table->string('address');
            $table->string('ref_address');
            $table->string('phone');
            $table->string('cell_phone');

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
        Schema::dropIfExists('persons');
    }
}
