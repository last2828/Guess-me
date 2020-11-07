<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

  protected $fillable = [
    'title',
    'description',
    'image',
    'slug',
    'answer',
    'help_1',
    'delimeter_1',
    'help_2',
    'delimeter_2',
    'help_3',
    'delimeter_3',
    'points',
    'quest_id'
  ];

  public function quests()
  {
    return $this->belongsTo(Quest::class, 'quest_id', 'id');
  }
}
