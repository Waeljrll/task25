<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            Post::factory()->count(30)->create();
            return;
        }

        Post::factory()
            ->count(30)
            ->recycle($categories)
            ->create();
    }
}
