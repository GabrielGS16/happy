<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria (Tailwind)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Mantendo as cores customizadas para consistência
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1d4ed8', // Azul forte
                        'primary-hover': '#1e40af', // Azul escuro para hover
                        'secondary': '#4f46e5', // Um roxo/índigo para ação secundária (como o link)
                        'secondary-hover': '#4338ca',
                        'bg-light': '#f9fafb',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bg-light min-h-screen flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-2xl border border-gray-100">
        
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
            Editar Categoria: <span class="text-primary">{{ $category->name }}</span>
        </h1>

        <form action="{{ route('reviews.update', $category->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT') 
            
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700 mb-1">Nome da Avaliação:</label>
                <input 
                    type="text" 
                    id="user_id" 
                    name="user_id" 
                    value="{{ $review->user_id }}" 
                    required 
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary focus:ring-primary outline-none transition duration-150 ease-in-out"
                >
            </div>
            
            <div>
                <label for="food_id" class="block text-sm font-medium text-gray-700 mb-1">Nome do Prato:</label>
                <textarea 
                    id="food_id" 
                    name="food_id" 
                    rows="4"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary focus:ring-primary outline-none resize-y transition duration-150 ease-in-out"
                >{{ $review->food_id }}</textarea>
            </div>
            
            <button 
                type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-base font-medium text-white bg-secondary hover:bg-secondary-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary transition duration-150 ease-in-out transform hover:scale-[1.01]"
            >
                <span class="mr-2">💾</span> Salvar Alterações
            </button>
        </form>
        
        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
            <a href="{{ route('reviews.index') }}" class="text-sm font-medium text-gray-500 hover:text-primary transition duration-150 ease-in-out">
                &larr; Voltar para a Lista de Avaliações
            </a>
        </div>
    </div>
    
</body>
</html>