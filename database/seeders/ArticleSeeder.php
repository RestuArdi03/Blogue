<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 User uji coba khusus (agar gampang login saat testing nanti)
        $user = User::factory()->create([
            'name'  => 'Ahmad',
            'email' => 'ahmad@gmail.com',
        ]);

        // Buat 10 Artikel yang semuanya dimiliki oleh User Ahmad di atas
        Article::factory(10)->create([
            'user_id' => $user->id,
        ]);

        // Opsional: Buat 5 artikel tambahan dengan User acak lain
        Article::factory(5)->create();
    }
}
