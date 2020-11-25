<?php

namespace Database\Seeders;

use App\Models\TypeTask;
use Illuminate\Database\Seeder;

class TypeTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      TypeTask::truncate();

      TypeTask::create([
        'name' => 'Вопрос'
      ]);

      TypeTask::create([
        'name' => 'Действие'
      ]);

      TypeTask::create([
        'name' => 'Карта'
      ]);
    }
}
