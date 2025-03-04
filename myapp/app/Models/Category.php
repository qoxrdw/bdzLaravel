<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'parent_id'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id'); // Родительская категория
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id'); // Дочерние категории
    }

    public function products()
    {
        return $this->hasMany(Product::class); // Товары в этой категории
    }
}

