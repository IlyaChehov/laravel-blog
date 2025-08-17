<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'excerpt',
        'slug',
        'meta_desc',
        'content',
        'category_id',
        'preview_img',
    ];
}
