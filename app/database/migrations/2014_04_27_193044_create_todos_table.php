<?php

use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function($table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned()->nullable();
            $table->integer('status')->unsigned()->nullable();
            $table->string('title', 255)->nullable();
            $table->longText('description')->nullable();
			$table->timestamp('due_at');
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
        Schema::drop('todos');
    }

}