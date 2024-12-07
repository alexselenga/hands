<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
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
            ->create()->each(function (Article $article) {
                $article->comments()->saveMany(
                    Comment::factory()->count(random_int(1, 5))->make()
                );
            });
    }
}
