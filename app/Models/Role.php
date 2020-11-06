<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Role
 *
 * @mixin Builder
 */
class Role extends Model
{
    use HasFactory;

  public function users()
  {
     return $this->belongsToMany(User::class);
    }
}
