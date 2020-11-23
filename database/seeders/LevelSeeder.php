<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Level::truncate();

      Level::create([
        'title' => 'Easy'
      ]);

      Level::create([
        'title' => 'Medium'
      ]);

      Level::create([
        'title' => 'High'
      ]);
    }
}
