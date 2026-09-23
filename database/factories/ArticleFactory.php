<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->unique()->sentence(6); // Menghasilkan judul acak bersambung

        return [
            // Ambil User yang ada, jika belum ada buat User baru secara otomatis
            'user_id' => User::factory(), 
            'title'   => $title,
            'slug'    => Str::slug($title),
            'body'    => fake()->paragraphs(5, true),
            'image'   => null, // Diisi null dulu untuk testing awal
        ];
    }
}
