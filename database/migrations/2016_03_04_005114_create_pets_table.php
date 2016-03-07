<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->integer('race_id');
            $table->integer('pelage_id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('sex');
            $table->string('avatar');
            $table->string('sterilization');
            $table->date('birthday');
            $table->boolean('state')->default(true);
            $table->string('comments');
            $table->boolean('pedigree')->default(false);
            $table->string('pedigree_number');
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
        Schema::dropIfExists('pets');
    }
}
