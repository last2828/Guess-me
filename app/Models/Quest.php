<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

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
    'address',
    'address_latitude',
    'address_longitude',
    'logo_image',
    'lead_time',
    'questions_count',
    'min_players_count',
    'max_players_count',
    'level_id',
    'user_id',
    'slug',
  ];

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
    return $this->belongsTo(Level::class, 'level_id', 'id');
  }
}
