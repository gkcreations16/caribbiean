<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_bgimage')->nullable();
            $table->string('footer_logoimage')->nullable();
            $table->string('short_note')->nullable();
            $table->string('foot_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('location_title')->nullable();
            $table->string('location_map')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('fb_videolink')->nullable();
            $table->string('foot_fblink')->nullable();
            $table->string('foot_insatalink')->nullable();
            $table->string('foot_twitterlink')->nullable();
            $table->string('foot_Linkinlink')->nullable();
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
        Schema::dropIfExists('footers');
    }
}
