<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->integer('quest_id');
            $table->string('answer');
            $table->string('points');
            $table->string('help_1')->nullable();
            $table->integer('points_help_1')->nullable();
            $table->string('help_2')->nullable();
            $table->integer('points_help_2')->nullable();
            $table->string('help_3')->nullable();
            $table->integer('points_help_3')->nullable();
            $table->string('address')->nullable();
            $table->double('address_latitude')->nullable();
            $table->double('address_longitude')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('tasks');
    }
}
