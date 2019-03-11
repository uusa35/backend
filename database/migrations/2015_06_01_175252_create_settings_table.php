<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_ar')->nullable();
            $table->string('company_en')->nullable();
            $table->string('address_ar')->nullable();
            $table->string('address_en')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('country_ar')->nullable();
            $table->string('country_en')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('email')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('logo')->nullable();
            $table->string('size_chart')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('main_theme_color')->nullable();
            $table->string('title_theme_color')->nullable();
            $table->string('text_theme_color')->nullable();
            $table->string('header_bg')->nullable();
            $table->string('header_color_font')->nullable();
            $table->string('header_color_bg')->nullable();
            $table->string('footer_bg')->nullable();
            $table->string('footer_color_font')->nullable();
            $table->string('footer_color_bg')->nullable();

            $table->boolean('apply_global_shipment')->default(0);
            $table->longText('code')->nullable();
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
        Schema::drop('settings');
    }
}
