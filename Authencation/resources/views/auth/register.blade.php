<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="input" value="{{ old('username') }}">
                @error('username')
                    <p class="error"> {{ $message }}</p>
                @enderror
            </div>

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
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input">
                @error('password_confirmation')
                    <p class="error"> {{ $message }}</p>
                @enderror
            </div>

            <button
                class="block w-full text-left hover:bg-slate-100 pl-4 pr-8 py-2 text-center bg-gray-400">Register</button>
        </form>
    </div>
</x-layout>
