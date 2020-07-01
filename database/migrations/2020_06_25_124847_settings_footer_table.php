<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SettingsFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('personal_data', function (Blueprint $table) {

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->String('phone');
            $table->String('address');
            $table->String('icon');
            $table->String('description');
            $table->String('youtube_link');
            $table->String('twitter_link');
            $table->String('inst_link');
            $table->String('snapchat_link');
            $table->String('facebook_link');
            $table->String('in_link');


            $table->rememberToken();
            $table->timestamps();
        });
    }
}
