<x-app-layout>
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6">Свяжитесь с нами</h1>

        @if (session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-semibold">Ваше имя:</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg p-2">
                @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block font-semibold">Ваш email:</label>
                <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg p-2">
                @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="message" class="block font-semibold">Сообщение:</label>
                <textarea name="message" id="message" rows="4" class="w-full border-gray-300 rounded-lg p-2"></textarea>
                @error('message')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                Отправить
            </button>
        </form>
    </div>
</x-app-layout>
