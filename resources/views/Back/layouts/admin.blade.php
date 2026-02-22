<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <x-styles-imports/>
</head>
<body class="bg-gray-100 font-figtree w-full flex gap-4">
    <div class="h-screen bg-gray-800 text-white w-64 flex flex-col">
        <div class="p-4 border-b border-gray-700">
            <a href="{{ route('admin.home') }}" class="text-xl font-bold">Admin Panel</a>
        </div>
        <nav class="flex-1 p-4">
            <ul>
                <li>
                    <a href="{{ route('admin.home') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Noticias</a>
                </li>
            </ul>
        </nav>
        <div class="p-4 border-t border-gray-700">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>

    <main class="w-full p-4">
        @yield('content')
    </main>
</body>
</html>
