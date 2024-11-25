<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      
 $this->call([
            ArticleSeeder::class,
            TagSeeder::class,
        ]);

        // Связываем статьи с тегами
        \App\Models\Article::all()->each(function ($article) {
            $article->tags()->attach(
                \App\Models\Tag::inRandomOrder()->limit(3)->pluck('id')->toArray()
            );
        });
    }
}
