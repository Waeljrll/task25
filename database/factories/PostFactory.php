<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake()->sentence(6),
            'content' => fake()->paragraphs(fake()->numberBetween(3, 6), true),
            'excerpt' => fake()->text(180),
            'image_url' => fake()->randomElement([
                'about.jpg',
                'coding.jpg',
                'contact.jpg',
                'news/news-1.jpg',
                'news/news-2.jpg',
                'news/news-3.jpg',
                'fashion/img-1.jpg',
                'fashion/img-2.jpg',
                'fashion/img-3.jpg',
            ]),
            'category_id' => Category::factory(),
        ];
    }
}
