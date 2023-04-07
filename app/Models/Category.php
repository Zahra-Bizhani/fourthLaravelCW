<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function parentCategory():HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function scopeParent(Builder $query)
    {
      return $query->whereNull('parent_category');
    }


}
