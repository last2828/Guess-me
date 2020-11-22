<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quests', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->longText('description')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('lead_time');
            $table->integer('questions_count');
            $table->integer('min_players_count');
            $table->integer('max_players_count');
<<<<<<< Updated upstream
            $table->string('difficulty_level');
=======
            $table->string('difficulty_level_id');
>>>>>>> Stashed changes
            $table->integer('user_id');
            $table->string('slug')->unique();
            $table->integer('category_id');
            $table->integer('attempts')->default('0');
            $table->string('location');
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('quests');
    }
}
