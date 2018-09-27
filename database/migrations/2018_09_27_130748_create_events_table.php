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
            $table->integer('event_orgID');
            $table->string('event_timeStart');
            $table->date('event_date');
            $table->time('event_time_start');
            $table->time('event_time_end');
            $table->string('event_typeID');
            $table->integer('event_fee');
            $table->string('event_status');
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
