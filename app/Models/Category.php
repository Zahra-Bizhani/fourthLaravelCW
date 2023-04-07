<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function PHPUnit\Framework\isNull;

class Category extends Model
{
    use HasFactory;

    protected $hidden=['created_at','updated_at'];

    public function parentCategories():HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function scopeParent(Builder $query)
    {
      return $query->whereNull('parent_category');
    }

    public function scopeShow(Builder $query)
    {
      return $query->where('isShow',1);
    }

    public function products(){
      return  $this->hasMany(Product::Class);
    }

    public function orders(){
      return  $this->hasManyThrough(Order::Class,Product::Class);
    }


    protected function parentCategory():Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value!==null)?$value:'ندارد',
        );
    }
}
