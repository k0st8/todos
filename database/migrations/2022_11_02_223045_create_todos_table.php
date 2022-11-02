<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description', 100);
            $table->enum('status', ['Todo','Done']);
            // Related to 1 Project
            $table->integer('project_id')->references('id')->on('projects')->onDelete('cascade');
            // Related to 1 User
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('viewed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
