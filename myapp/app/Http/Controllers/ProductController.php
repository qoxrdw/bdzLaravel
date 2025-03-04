<?php
namespace App\Http\Controllers;

use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get(); // Получаем все категории и товары в них
        return view('products.index', compact('categories'));
    }
}
