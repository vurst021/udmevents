<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function (Blueprint $table) {
            $table->increments('attendees_id');
            $table->integer('att_statusID')->unsigned()->nullable();
            $table->foreign('att_statusID')->references('att_status_id')
                  ->on('attendees_statuses')
                  ->onDelete('cascade');
            $table->integer('event_ID')->unsigned()->nullable();      
            $table->foreign('event_ID')->references('event_id')
                  ->on('events')
                  ->onDelete('cascade');
            $table->integer('userID')->unsigned()->nullable();
            $table->foreign('userID')->references('id')
                  ->on('users')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('attendees');
    }
}
