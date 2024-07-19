<x-layout>
    <h1 class="title">Login</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email">email</label>
                <input type="text" name="email" class="input">
                @error('email')
                    <p class="error"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="input">
                @error('password')
                    <p class="error"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
                @error('remember')
                    <p class="error"> {{ $message }}</p>
                @enderror
            </div>

            <button
                class="block w-full text-left hover:bg-slate-100 pl-4 pr-8 py-2 text-center bg-gray-400">Login</button>
        </form>
    </div>
</x-layout>
