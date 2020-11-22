<?php

namespace Database\Seeders;

use App\Models\Quest;
use Illuminate\Database\Seeder;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quest::truncate();

        Quest::create([
          'title' => 'My first quest',
          'description' => 'Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor',
          'logo_image' => '',
          'lead_time' => '60 minutes',
          'questions_count' => '10',
          'min_players_count' => '4',
          'max_players_count' => '8',
<<<<<<< Updated upstream
          'difficulty_level' => 'Easy',
=======
          'difficulty_level_id' => '1',
>>>>>>> Stashed changes
          'user_id' => '1',
          'slug' => 'my-first-quest',
          'location' => 'Gaisyn',
          'category_id' => '1',
        ]);

        Quest::create([
          'title' => 'Testing quest',
          'description' => 'Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor',
          'logo_image' => '',
          'lead_time' => '60 minutes',
          'questions_count' => '6',
          'min_players_count' => '3',
          'max_players_count' => '6',
<<<<<<< Updated upstream
          'difficulty_level' => 'Medium',
=======
          'difficulty_level_id' => '2',
>>>>>>> Stashed changes
          'user_id' => '2',
          'slug' => 'testing-quest',
          'location' => 'Gaisyn',
          'category_id' => '2',
        ]);

        Quest::create([
          'title' => 'Apartment quest',
          'description' => 'Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor',
          'logo_image' => '',
          'lead_time' => '60 minutes',
          'questions_count' => '8',
          'min_players_count' => '2',
          'max_players_count' => '4',
<<<<<<< Updated upstream
          'difficulty_level' => 'High',
=======
          'difficulty_level_id' => '3',
>>>>>>> Stashed changes
          'user_id' => '3',
          'slug' => 'apartment-quest',
          'location' => 'Gaisyn',
          'category_id' => '3',
        ]);
    }
}
