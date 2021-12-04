<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug','description','user_id',
        'blog_category_id','imageUrl',
    ];

    protected $casts = [
        'published' => 'bool'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }
}
