<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('confirmation_code', 255);
            $table->boolean('confirmed')->nullable();
            $table->boolean('cancelled')->nullable();
			$table->timestamp('last_activity');
			$table->timestamp('last_login');
            $table->string('displayname', 256)->nullable();
            $table->string('username', 255)->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::drop('users');
    }

}