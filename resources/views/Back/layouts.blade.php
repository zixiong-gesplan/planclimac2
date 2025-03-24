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
    @include('Back.components.sidebar')
    @yield('content')
</body>
</html>