<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Ejemplo - @yield('titulo')</title>
    <script src="{{asset('js/app.js')}}" defer></script>
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">

        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Ejemplo
            </h1>
            @auth
            <nav>
                <a class="font-bold text-gray-500 text-sm">
                    Hola: <span class="font-normal">{{auth()->user()->username}}</span>
                </a>

                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" href="{{route('logout')}}" class="font-bold text-gray-500 text-sm">Cerrar
                        sesión</button>
                </form>
            </nav>
            @endauth

            @guest
            <nav>
                <a href="{{route('login')}}" class="font-bold text-gray-500 text-sm">Login</a>
                <a href="{{route('register.index')}}" class="font-bold text-gray-500 text-sm">Crear cuenta</a>
            </nav>
            @endguest

        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        Ejemplo - Luis Ortiz {{now()->year}}
    </footer>

</body>

</html>