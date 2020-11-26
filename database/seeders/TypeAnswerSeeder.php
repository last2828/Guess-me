<?php

namespace Database\Seeders;

use App\Models\TypeAnswer;
use Illuminate\Database\Seeder;

class TypeAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      TypeAnswer::truncate();

      TypeAnswer::create([
        'name' => 'Текст',
      ]);

      TypeAnswer::create([
        'name' => 'Фото',
      ]);

      TypeAnswer::create([
        'name' => 'Видео',
      ]);

      TypeAnswer::create([
        'name' => 'Аудио',
      ]);
    }
}
