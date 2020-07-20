<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('email')->unique();
            $table->String('phone');
            $table->String('address');
            $table->date('dob');
            $table->string('gender');
            $table->string('degree');
            $table->String('job');
            $table->String('JobTitle');
            $table->String('jobTime');
            $table->integer('salary');
            $table->string('yearsExperience');
            $table->String('skills');
            $table->String('CV');
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

    }
}
