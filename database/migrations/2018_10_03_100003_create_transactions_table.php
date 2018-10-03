<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('trans_id');
            $table->integer('trans_userID')->unsigned()->nullable();
            $table->foreign('trans_userID')->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->integer('trans_eventID')->unsigned()->nullable();
            $table->foreign('trans_eventID')->references('event_id')
                  ->on('events')
                  ->onDelete('cascade');
            $table->integer('trans_paymentID')->unsigned()->nullable();      
            $table->foreign('trans_paymentID')->references('payment_id')
                  ->on('payment_methods')
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
        Schema::dropIfExists('transactions');
    }
}
