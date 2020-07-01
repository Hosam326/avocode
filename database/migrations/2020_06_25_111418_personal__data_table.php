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
        Schema::create('personal_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->String('phone');
            $table->String('location');
            $table->date('dob');
            $table->boolean('gender');
            $table->integer('address');
            $table->String('job');
            $table->String('JobTitle');
            $table->String('jobTime');
            $table->integer('salary');
            $table->integer('yearsExperience');
            $table->String('skills');
            $table->String('CV');
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
        //
    }
}
