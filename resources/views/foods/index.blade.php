<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Comidas (Tailwind)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Mantendo as cores customizadas para consistência
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1d4ed8', // Azul forte
                        'primary-hover': '#1e40af', 
                        'danger': '#dc2626', // Vermelho para deletar
                        'danger-hover': '#b91c1c',
                        'bg-light': '#f9fafb',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bg-light min-h-screen flex flex-col items-center p-6">

    <div class="w-full max-w-4xl">
        
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8 text-center mt-4">
            Gerenciamento de Comidas
        </h1>

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <div class="space-y-4">
            @foreach($foods as $food)
                <div class="flex items-center justify-between p-5 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 ease-in-out border border-gray-100">
                    
                    <div class="flex-grow min-w-0">
                        <p class="text-xl font-semibold text-gray-800 truncate" title="{{ $food->name }}">
                            {{ $food->name }}
                        </p>
                        <p class="text-sm text-gray-500 mt-1 line-clamp-2" title="{{ $food->description }}">
                            {{ $food->description }}
                        </p>
                        <p class="text-sm text-gray-500 mt-1 line-clamp-2" title="{{ $food->price }}">
                           {{ $food->price }}
                        </p>
                    </div>

                    <div class="flex space-x-3 ml-6 flex-shrink-0">
                        
                        <a href="{{ route('foods.edit', $food->id) }}" class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg hover:bg-primary-hover transition duration-150 shadow-md">
                            Editar
                        </a>

                        <form action="{{ route('foods.destroy', $food->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja DELETAR a comida {{ $food->name }}?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-danger rounded-lg hover:bg-danger-hover transition duration-150 shadow-md">
                                Deletar
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="mt-10 pt-6 border-t border-gray-200 flex justify-center space-x-8">
            <a href="{{ route('foods.create') }}" class="flex items-center text-primary font-semibold hover:text-primary-hover transition duration-150">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Criar Nova Comida
            </a>
            
            <a href="{{ route('dashboard') }}" class="flex items-center text-gray-500 font-medium hover:text-gray-700 transition duration-150">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                Voltar para o Dashboard
            </a>
        </div>
        
    </div>
</body>
</html>