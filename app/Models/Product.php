<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $visible=['name','id','price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeSeen(Builder $query)
    {
        return $query->where('seen', '>', 500);
    }

    public function scopeSold(Builder $query)
    {
        return $query->where('sold', '>', 25);
    }

    public function scopeLike(Builder $query,$name)
    {
        return $query->where('name', 'like', "%{$name}%");
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
