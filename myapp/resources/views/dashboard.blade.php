<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ваш профиль') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <!-- Кнопка "Перейти в магазин" -->
                <div class="p-6">
                    <a href="/products" class="inline-block px-1 py-1 mt-4 bg-blue-500 text-black font-semibold rounded-lg hover:bg-blue-600 transition">
                        Перейти в магазин
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
