<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('calling_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('flag')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('has_currency')->default(0);
            $table->boolean('active')->default(1);
            $table->string('currency_symbol_ar', 25)->nullable();
            $table->string('currency_symbol_en', 25)->nullable();
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
        Schema::drop('countries');
    }
}
