<?php

use Illuminate\Database\Migrations\Migration;

class CreatePasswordremindersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_reminders', function($table) {
            $table->increments('id');
            $table->string('email', 255);
            $table->string('token', 255);
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
        Schema::drop('password_reminders');
    }

}