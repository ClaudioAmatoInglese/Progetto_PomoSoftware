<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Elettronica',  
            'Abbigliamento',
            'Salute e Bellezza',
            'Casa e Giardinaggio',
            'Giocattoli',
            'Sport',
            'Animali domestici',
            'Libri e Riviste',
            'Accessori',
            'Motori',
        ];
        
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
        
        $this->call(ArticleSeeder::class);
    }
}
