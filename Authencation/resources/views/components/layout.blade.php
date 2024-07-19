<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <header class="bg-slate-500 tezxt-slade-900">
        <nav>
            <a href="{{ route('home') }}">Home</a>

            @auth
                <div class="relative grid place-items-center" x-data="{ open: false }">
                    <button @click="open = !open" type="button" class="round-btn">
                        <img src="https://picsum.photos/id/1/200/300" alt="" class="round-btn">
                    </button>

                    <div x-show="open" @click.outside="open = false"
                        class="bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden font-light">

                        <p class="username">{{ auth()->user()->username }}</p>


                        <a href="{{ route('dashboard') }}" class="">Dashboard</a>

                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="block w-full text-left hover:bg-slate-100 pl-4 pr-8 py-2">Logout</button>
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <div class="flex items-center gap-4">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </div>
            @endguest

        </nav>
    </header>

    <main class="py-8 px-4 mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
