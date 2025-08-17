<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory, Sluggable;

    protected $table = 'categories';

    protected $fillable
        = [
            'title',
            'slug',
            'meta_desc',
        ];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => mb_ucfirst(mb_strtolower($value)),
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
