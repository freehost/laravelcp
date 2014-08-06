<?php

use Illuminate\Database\Migrations\Migration;

class CreateActivitylogTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_log', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('content_id');
            $table->string('content_type', 72);
            $table->string('action', 32);
            $table->string('description', 255);
            $table->longText('details');
            $table->boolean('developer');
            $table->string('ip_address', 64);
            $table->string('user_agent', 255);
            $table->timestamps()->default('1900-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_log');
    }

}