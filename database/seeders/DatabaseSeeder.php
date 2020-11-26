<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      $this->call(QuestSeeder::class);
      $this->call(CategorySeeder::class);
      $this->call(LevelSeeder::class);
      $this->call(TaskSeeder::class);
      $this->call(TypeAnswerSeeder::class);
    }
}
