<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Task::truncate();

      Task::create([
        'title' => 'Первое задание в квесте',
        'description' => 'Назовите имя организатора квеста',
        'quest_id' => '1',
        'slug' => 'first-quest-task',
        'answer' => 'Кирилл',
        'points' => 10,
        'help_1' => '2 буквы "л"',
      ]);

      Task::create([
        'title' => 'Второе задание в квесте',
        'description' => 'Сфотографируйте небо',
        'quest_id' => '1',
        'slug' => 'sfotografiruite-nebo',
        'answer' => 'IMAGE OBJECT',
        'points' => 20,
      ]);

      Task::create([
        'title' => 'Идите к этому месту',
        'description' => 'Соборная 46 кв 39',
        'quest_id' => '1',
        'slug' => 'sobornaya-46',
        'answer' => 'MAP OBJECT',
        'points' => 50,
        'help_1' => 'Дом Кирилла Бузюка',
      ]);
    }
}
