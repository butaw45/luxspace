<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.product.create') }}" class="bg-green-500 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create Product
                </a>
            </div>

</x-app-layout>
