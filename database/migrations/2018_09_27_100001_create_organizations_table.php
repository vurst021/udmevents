<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('org_id');
            $table->string('org_name')->unique();
            $table->integer('org_head_userID')->nullable();
            $table->text('org_description')->nullable();
            $table->string('org_slug')->unique(); 
            $table->integer('org_colID')->nullable();
            $table->integer('org_status')->nullable();      

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
        Schema::dropIfExists('organizations');
    }
}
