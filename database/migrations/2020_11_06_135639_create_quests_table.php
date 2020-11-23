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
            $table->string('logo_image_url')->nullable();
            $table->string('logo_image_basename')->nullable();
            $table->string('logo_image_original_name')->nullable();
            $table->string('lead_time')->nullable();
            $table->integer('questions_count')->default('0');
            $table->integer('min_players_count');
            $table->integer('max_players_count');
            $table->string('level_id');
            $table->integer('user_id');
            $table->string('slug')->unique();
            $table->integer('category_id');
            $table->integer('attempts')->default('0');
            $table->string('address')->nullable();
            $table->double('address_latitude')->nullable();
            $table->double('address_longitude')->nullable();
            $table->string('rating')->nullable();
            $table->boolean('status')->default(false);
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
