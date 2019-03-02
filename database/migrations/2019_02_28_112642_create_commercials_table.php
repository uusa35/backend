<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->boolean('is_double')->default(0);
            $table->boolean('is_triple')->default(0);
            $table->string('caption_ar')->nullable();
            $table->string('caption_en')->nullable();
            $table->string('order')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('path')->nullable();
            $table->boolean('active')->default(0);
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
        Schema::drop('commercials');
    }
}
