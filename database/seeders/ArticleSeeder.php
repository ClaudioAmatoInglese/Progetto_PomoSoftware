<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        $userIds = User::pluck('id')->toArray();

        Article::factory()
            ->count(10)
            ->make()
            ->each(function ($article) use ($categories, $userIds) {
                $article->category_id = $categories->random()->id;

                $article->user_id = fake()->randomElement($userIds);

                $article->save();
            });
    }
}
