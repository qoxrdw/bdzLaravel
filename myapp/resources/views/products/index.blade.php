<x-app-layout>
    <div class="text-center mt-8 mb-8">
        <a href="{{ route('cart.index') }}" class="bg-green-500 text-black py-2 px-4 rounded hover:bg-green-600">Перейти в корзину</a>
    </div>

    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-8">Наши товары</h1>

        @foreach ($categories as $category)
            <h2 class="text-2xl font-semibold mt-8 mb-4">{{ $category->name }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($category->products as $product)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden flex-col">
                        <img class="w-fit h-64 object-cover" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mt-3">{{ $product->name }}</h3>
                            <p class="text-gray-600 text-sm mt-1">{{ $product->description }}</p>
                            <p class="text-green-600 text-lg font-bold mt-2">{{ $product->price }} ₽</p>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-4">
                                @csrf
                                <button type="submit" class="w-full bg-blue-500 text-black py-2 px-4 rounded hover:bg-blue-600">
                                    Купить
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-app-layout>
