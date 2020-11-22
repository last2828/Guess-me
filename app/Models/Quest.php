<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;
    use Sluggable;

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
<<<<<<< Updated upstream
=======

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id', 'id');
  }

  public function level()
  {
    return $this->belongsTo(QuestLevel::class, 'difficulty_level_id', 'id');
  }

  /**
   * Return the sluggable configuration array for this model.
   *
   * @return array
   */
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
>>>>>>> Stashed changes
}
