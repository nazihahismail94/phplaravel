<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('ic');
            $table->binary('image');
            $table->integer('phonenumber');
            $table->integer('officenumber');
            $table->string('occupation');
            $table->string('race');
            $table->string('religion');
            $table->string('address1');
			$table->string('address2');
			$table->integer('poscode');
			$table->string('city');
			$table->string('province');
			$table->string('note');
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
        Schema::drop('details');
    }
}
