<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()
            ->count(10)
            ->has(Comment::factory()->count(2))
            ->hasAttached(Tag::factory()->count(4))
            ->create();
    }
}
