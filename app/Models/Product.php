<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'imageUrl',
        'product_category_id'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function materials()
    {
        return $this->morphToMany(Material::class,'manufacture');
    }

}
