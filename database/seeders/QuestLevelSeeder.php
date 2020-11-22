<?php

namespace Database\Seeders;

use App\Models\QuestLevel;
use Illuminate\Database\Seeder;

class QuestLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      QuestLevel::truncate();

      QuestLevel::create([
        'title' => 'Easy'
      ]);

      QuestLevel::create([
        'title' => 'Medium'
      ]);

      QuestLevel::create([
        'title' => 'High'
      ]);
    }
}
