<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_statuses', function (Blueprint $table) {
            $table->increments('event_status_id');
            $table->integer('event_ID')->unsigned()->nullable();
            $table->foreign('event_ID')->references('event_id')
                  ->on('events')
                  ->onDelete('cascade');
            $table->integer('admin_ID')->unsigned()->nullable();
            $table->foreign('admin_ID')->references('admin_id')
                  ->on('admins')
                  ->onDelete('cascade');
            $table->string('event_status_status');
            $table->text('event_status_comment')->nullable();
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
        Schema::dropIfExists('event_statuses');
    }
}
