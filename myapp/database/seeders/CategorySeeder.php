<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Основные категории
        Category::create([
            'name' => 'Apple',
            'description' => 'Ноутбуки Apple.',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'Samsung',
            'description' => 'Ноутбуки Samsung.',
            'parent_id' => null
        ]);

    }
}


