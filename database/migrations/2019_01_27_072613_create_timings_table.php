<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->time('start');
            $table->time('end');
            $table->boolean('is_off')->default(0);
            $table->string('type')->nullable();

            $table->smallInteger('week_start');
            $table->smallInteger('day_no');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('service_id')->unsigned()->index()->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }
    /*
     * doing a service that has a specific date and specific time
     * timings : working days
     *
     * Sun , Mon , tue , wed , thur : from 8 to 3
     * Friday is off
     * Saturday is off
     *
     * */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('timings');
    }
}
