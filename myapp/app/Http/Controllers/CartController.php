<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Добавить товар в корзину
    public function addToCart($productId)
    {
        $user = Auth::user();  // Получаем текущего пользователя
        $product = Product::findOrFail($productId);  // Находим продукт

        // Проверяем, есть ли товар в корзине
        $cartItem = CartItem::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // Если товар уже есть, увеличиваем количество
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Если товара нет в корзине, добавляем его
            CartItem::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.index');  // Перенаправляем на страницу корзины
    }

    // Показать корзину
    public function showCart()
    {
        $user = Auth::user();
        $cartItems = CartItem::with('product')->where('user_id', $user->id)->get();  // Получаем товары из корзины

        return view('cart.index', compact('cartItems'));
    }

    // Удалить товар из корзины
    public function removeFromCart($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index');
    }
    public function index()
    {
        // Логика для получения товаров из корзины (например, из сессии или базы данных)
        return view('cart.index');  // Отображаем страницу корзины
    }
}
