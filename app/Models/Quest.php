<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'category_id',
      'rating',
      'attempts',
      'address',
      'address_latitude',
      'address_longitude',
      'logo_image',
      'lead_time',
      'questions_count',
      'min_players_count',
      'max_players_count',
      'difficulty_level_id',
      'user_id',
      'slug',
    ];

  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id', 'id');
  }

  public function level()
  {
    return $this->belongsTo(QuestLevel::class, 'difficulty_level_id', 'id');
  }
}
