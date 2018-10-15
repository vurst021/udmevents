<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('event_name');
            $table->text('event_description');
            
            $table->integer('event_orgID')->unsigned()->nullable();

            $table->dateTime('event_date_start');
            // $table->dateTime('event_date_end');
            $table->time('event_time_start');
            $table->time('event_time_end');

            $table->integer('event_venueID')->unsigned()->nullable();

            $table->integer('event_typeID')->unsigned()->nullable();
            
            $table->integer('event_fee');

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
        Schema::dropIfExists('events');
    }
}
