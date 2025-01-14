<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'project_description',
        'short_description',
        'description',
        'thumbnail',
        'user_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'color',
        'status'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_categories');
    }
}
