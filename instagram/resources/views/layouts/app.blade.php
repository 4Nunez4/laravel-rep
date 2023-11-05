<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Devstagram</title>


</head>

<body class="bg-gray-200">
    <header class="flex items-center justify-between border-b p-5 bg-white shadow  ">
        <h1 class="text-3xl font-black  ">
            Devstagram</h1>
        <nav>
            <a href="/" class="uppercase text-gray-600  font-bold text-small">Login </a>
            <a href="/register" class="uppercase text-gray-600  font-bold text-small">Crear CUENTA</a>

        </nav>
    </header>

    <main class="container mx-auto mt-10">
        @yield('contenido')

        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>







    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">

        Todos los derechos reservados jorge {{ date('Y') }}

    </footer>

</body>

</html>
