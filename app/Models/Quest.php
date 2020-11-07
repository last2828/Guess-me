<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'category_id',
      'rating',
      'attempts',
      'location',
      'logo_image',
      'lead_time',
      'questions_count',
      'min_players_count',
      'max_players_count',
      'difficulty_level',
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
}
