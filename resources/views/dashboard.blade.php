<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <nav class="bg-white p-4 mb-8 rounded-xl shadow-lg border border-gray-100">
                <div class="flex flex-wrap justify-between items-center gap-4">
                    
                    <a href="{{ route('categories.index') }}" 
                        class="flex-1 text-center py-2 px-4 rounded-lg font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 transition duration-200 min-w-[150px]">
                        📦 Categorias
                    </a>
                    
                    <a href="{{ route('foods.index') }}" 
                        class="flex-1 text-center py-2 px-4 rounded-lg font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 transition duration-200 min-w-[150px]">
                        🍔 Foods
                    </a>
                    
                    <a href="{{ route('orders.index') }}" 
                        class="flex-1 text-center py-2 px-4 rounded-lg font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 transition duration-200 min-w-[150px]">
                        🛒 Orders
                    </a>
                    
                    <a href="{{ route('stores.index') }}" 
                        class="flex-1 text-center py-2 px-4 rounded-lg font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 transition duration-200 min-w-[150px]">
                        🏬 Store
                    </a>
                    
                    <a href="{{ route('reviews.index') }}" 
                        class="flex-1 text-center py-2 px-4 rounded-lg font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 transition duration-200 min-w-[150px]">
                        ⭐ Review
                    </a>
                </div>
            </nav>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg">Bem-vindo ao painel de administração!</p>
                    <p class="text-gray-600 mt-2">Utilize a navegação acima para gerenciar os seus recursos.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>