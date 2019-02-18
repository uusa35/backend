<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku')->nullable();
            $table->string('name_ar');
            $table->string('name_en');
            $table->boolean('on_sale')->default(0);
            $table->boolean('on_sale_on_homepage')->default(0);
            $table->boolean('on_homepage')->default(0);
            $table->integer('duration')->default(1);
            $table->decimal('price',6,2)->unsigned();
            $table->decimal('sale_price',6,2)->unsigned()->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('notes_ar')->nullable();
            $table->text('notes_en')->nullable();
            $table->string('image')->nullable();
            $table->string('video_url_one')->nullable();
            $table->string('video_url_two')->nullable();

            $table->dateTime('start_sale')->nullable();
            $table->dateTime('end_sale')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('is_hot_deal')->default(0);
            $table->boolean('has_attribute')->default(0);

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->softDeletes();
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
        Schema::drop('services');
    }
}
