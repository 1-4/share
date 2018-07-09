<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSiteConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_config', function (Blueprint $table) {
            $table->increments('id');
            $table->text('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('top_text_banner')->nullable();
            $table->text('top_detail_text_banner')->nullable();
            $table->text('top_img_banner')->nullable();
            $table->string('bottom_text_banner')->nullable();
            $table->text('bottom_detail_text_banner')->nullable();
            $table->text('facebook')->default('#')->nullable();
            $table->text('instagram')->default('#')->nullable();
            $table->text('twitter')->default('#')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_config');
    }
}
