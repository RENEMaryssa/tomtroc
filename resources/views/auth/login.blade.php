<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-3xl font-light text-gray-800 mb-8 w-full text-center">Connexion</h1>


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-6"> 
            <button class="w-full px-4 py-2 rounded-md text-white font-semibold transition duration-150 block bg-[#2ECC71] hover:bg-[#27AE60]" type="submit">
                {{ __('CONNEXION') }}
            </button>
        </div>
        
        <div class="text-center mt-4">
            @if (Route::has('register'))
                <span class="text-sm text-gray-600">Pas de compte ? </span>
                <a class="underline text-sm font-semibold text-[#2ECC71] hover:text-[#27AE60] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-800" href="{{ route('register') }}">
                    {{ __('S’inscrire') }}
                </a>
            @endif
        </div>
        
    </form>
</x-guest-layout>