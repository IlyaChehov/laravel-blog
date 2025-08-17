<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->unique()->word(),
            'excerpt' => $this->faker->sentence(5),
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(100),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
