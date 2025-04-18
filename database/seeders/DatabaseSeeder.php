<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    
    
    public function run(): void
    {
        
        $categories = [
            'elettronica',  
            'abbigliamento',
            'salute e bellezza',
            'casa e giardinaggio',
            'giocattoli',
            'sport',
            'animali domestici',
            'libri e riviste',
            'accessori',
            'motori',
        ];
        
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }    
        
    }
    
}
