<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_categories_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // id категории
            $table->string('name'); // Название категории
            $table->text('description'); // Описание категории
            $table->foreignId('parent_id')->nullable()->constrained('categories')->onDelete('cascade'); // Родительская категория
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
