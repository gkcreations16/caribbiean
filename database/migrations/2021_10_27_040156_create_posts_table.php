<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->text('address')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->default('default.jpg');
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedind_link')->nullable();
            $table->string('aircondition')->nullable();
            $table->string('hometheter')->nullable();
            $table->string('homedelivery')->nullable();
            $table->string('roomservice')->nullable();
            $table->string('electric')->nullable();
            $table->string('security')->nullable();
            $table->string('balcony')->nullable();
            $table->string('parking')->nullable();
            $table->string('netbanking')->nullable();
            $table->string('wifi')->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('price')->nullable();

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
        Schema::dropIfExists('posts');
    }
}
