<!-- resources/views/cart/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Корзина покупок') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($cartItems->isEmpty())
                <p>Ваша корзина пуста.</p>
            @else
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <ul>
                            @foreach ($cartItems as $cartItem)
                                <li>
                                    {{ $cartItem->product->name }} - {{ $cartItem->quantity }} шт.
                                    <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Удалить</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
                <!-- Кнопка "Обратно к покупкам" -->
                <div class="py-4 text-center">
                    <a href="{{ route('products.index') }}" class="bg-green-500 text-black py-2 px-40 rounded hover:bg-green-600">Обратно к покупкам</a>
                </div>
        </div>

    </div>


</x-app-layout>
