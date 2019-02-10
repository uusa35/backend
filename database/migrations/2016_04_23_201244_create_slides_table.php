<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caption_en')->nullable();
            $table->string('caption_ar')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('order')->nullable();
            $table->string('image')->nullable();
            $table->string('path')->nullable();
            $table->string('url')->nullable();
            $table->morphs('slidable');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('slides');
    }
}
