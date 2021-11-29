<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('banner_heading')->nullable();
            $table->string('banner_content')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('latest_listingheading')->nullable();
            $table->string('latest_listingdescription')->nullable();
            $table->string('latestlist_image')->nullable();
            $table->string('post_addheading')->nullable();
            $table->string('post_adddescription')->nullable();
            $table->string('addpost_image')->nullable();
            $table->string('bussiness_direc_heading')->nullable();
            $table->string('bussiness_direc_description')->nullable();
            $table->string('bussiness_image')->nullable();
            $table->string('descover_heading')->nullable();
            $table->string('mostpopulr_category')->nullable();
            $table->string('listing_heading')->nullable();
            $table->string('populor_feuted_add')->nullable();
            $table->string('why_we')->nullable();
            $table->string('we_are_mstpopular')->nullable();
            $table->string('top_categry_head')->nullable();
            $table->string('top_categry_description')->nullable();
            $table->string('qlity_adds_headings')->nullable();
            $table->string('qlity_adds_description')->nullable();
            $table->string('top_bestlocation_headings')->nullable();
            $table->string('top_bestlocation_description')->nullable();
            $table->string('new_directory_head')->nullable();
            $table->string('new_bussinesslisting')->nullable();
            $table->string('find_whatyouwant_heading')->nullable();
            $table->string('find_whatyouwant_description')->nullable();
            $table->string('find_whatyou_image')->nullable();
            $table->string('explore_amezing_head')->nullable();
            $table->string('explore_amezing_description')->nullable();
            $table->string('bottom_content_heading')->nullable();
            $table->string('explore_amezing')->nullable();
            $table->string('bottom_content_description')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
