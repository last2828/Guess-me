<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use Sluggable;

  protected $fillable = [
    'title',
    'description',
    'image',
    'slug',
    'answer',
    'typeTask',
    'typeAnswer_id',
    'help_1',
    'delimeter_1',
    'help_2',
    'delimeter_2',
    'help_3',
    'delimeter_3',
    'points',
    'quest_id'
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

  public function quest()
  {
    return $this->belongsTo(Quest::class, 'quest_id', 'id');
  }
}
