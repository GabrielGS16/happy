<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar lojas (Tailwind)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1d4ed8', // Um azul mais forte
                        'primary-hover': '#1e40af', // Azul escuro para hover
                        'bg-light': '#f9fafb', // Fundo bem claro
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bg-light min-h-screen flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-2xl border border-gray-100">
        
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
            Criar Nova loja
        </h1>

        <form action="{{ route('stores.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome da loja:</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    placeholder="Ex: Eletrônicos, Vestuário"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary focus:ring-primary outline-none transition duration-150 ease-in-out"
                >
            </div>
            
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Descrição:</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4"
                    placeholder="Breve descrição sobre o que esta categoria agrupa..."
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:border-primary focus:ring-primary outline-none resize-y transition duration-150 ease-in-out"
                ></textarea>
            </div>
            
            <button 
                type="submit" 
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-base font-medium text-white bg-primary hover:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150 ease-in-out transform hover:scale-[1.01]"
            >
                <span class="mr-2">➕</span> Criar loja
            </button>
        </form>
        
        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
            <a href="{{ route('stores.index') }}" class="text-sm font-medium text-gray-500 hover:text-primary transition duration-150 ease-in-out">
                &larr; Voltar para a Lista de lojas
            </a>
        </div>
    </div>
    
</body>
</html>