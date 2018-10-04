<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_heads', function (Blueprint $table) {
            $table->increments('org_head_id');
            $table->integer('org_head_userID')->unsigned()->nullable();
            $table->foreign('org_head_userID')->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->integer('org_head_orgID')->unsigned()->nullable();
            $table->foreign('org_head_orgID')->references('org_id')
                  ->on('organizations')
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
        Schema::dropIfExists('org_heads');
    }
}
