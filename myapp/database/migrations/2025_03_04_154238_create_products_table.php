<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_products_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up() : void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id товара
            $table->string('name'); // Название товара
            $table->text('description'); // Описание товара
            $table->decimal('price', 8, 2); // Цена товара
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Внешний ключ на категорию
            $table->string('image_url'); // Ссылка на изображение товара
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('products');
    }
}

