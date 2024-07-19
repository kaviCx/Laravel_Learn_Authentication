<x-layout>

    @auth
        <h1>You are Successfully Logged in!!!</h1>

        <div>
            <a href="{{ url('/posts/show') }}" class="block w-full text-left hover:bg-slate-300 pl-4 pr-8 py-2">View All
                posts</a>
        </div>

    @endauth

    @guest
        <h1>Guest</h1>
    @endguest




</x-layout>
