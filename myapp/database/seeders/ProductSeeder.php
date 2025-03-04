<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Добавим несколько товаров
        Product::create([
            'name' => 'Macbook Air',
            'description' => 'Легкий ноутбук.',
            'price' => 111799.99,
            'category_id' => 1, // Apple
            'image_url' => 'https://c.dns-shop.ru/thumb/st1/fit/320/250/22c72e90726815825f6e5d1641a4b8d1/bc1311aa320af2e639161b8f6b03f01d7f1d915c9186421f8472626fcad1195a.jpg'
        ]);

        Product::create([
            'name' => 'MacBook Pro 16"',
            'description' => 'Мощный ноутбук.',
            'price' => 210399.99,
            'category_id' => 1, // Apple
            'image_url' => 'https://c.dns-shop.ru/thumb/st1/fit/320/250/d02f599b5c3dcda43dfd48939fc83187/7fb49886aea7ba96b869deef5303519cceb5e8cacf074d7595c50231cbfd009a.jpg'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Book Ultra Mega 10',
            'description' => 'Дорогой ноутбук.',
            'price' => 9999999.99,
            'category_id' => 2, // Samsung
            'image_url' => 'https://c.dns-shop.ru/thumb/st1/fit/500/500/c51d6f63b31e3a03f0be5fe51d3822fb/6f868dd52fa7a20e7c81b4f51268d08c6a014b04c7a748fac5ab5b5059f5f08d.png.webp'
        ]);



        Product::create([
            'name' => 'Samsung Galaxy Book 4',
            'description' => 'Хороший ноутбук.',
            'price' => 100399.99,
            'category_id' => 2, // Samsung
            'image_url' => 'https://c.dns-shop.ru/thumb/st1/fit/320/250/d02f599b5c3dcda43dfd48939fc83187/7fb49886aea7ba96b869deef5303519cceb5e8cacf074d7595c50231cbfd009a.jpg'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy Book 4',
            'description' => 'Хороший ноутбук.',
            'price' => 60000.99,
            'category_id' => 2, // Samsung
            'image_url' => 'https://c.dns-shop.ru/thumb/st1/fit/320/250/3eb8433a8b8cdddfaa31586c29b45e99/388675f4f2d860a11dc937be8fcd6bc45c84ec6e3d2e01425a71b63207b11869.jpg'
        ]);


    }
}
