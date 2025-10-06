<x-guest-layout>
    
    <h1 class="text-3xl font-light text-gray-800 mb-8 w-full text-center">Inscription</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
            <x-input-label for="name" :value="__('Pseudo')" />
            <x-text-input id="name" class="block mt-1 w-full !px-4 !py-3 border-gray-300 rounded-md focus:border-[#2ECC71] focus:ring-0" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required 
                          autofocus 
                          autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4 mb-4">
            <x-input-label for="email" :value="__('Adresse email')" />
            <x-text-input id="email" class="block mt-1 w-full !px-4 !py-3 border-gray-300 rounded-md focus:border-[#2ECC71] focus:ring-0" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required 
                          autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4 mb-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full !px-4 !py-3 border-gray-300 rounded-md focus:border-[#2ECC71] focus:ring-0"
                            type="password"
                            name="password"
                            required 
                            autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full px-6 py-3 rounded-md text-white font-semibold transition duration-150 bg-[#2ECC71] hover:bg-[#27AE60]">
                {{ __('S’inscrire') }}
            </button>
        </div>

        <div class="text-center mt-4">
            <span class="text-sm text-gray-600">Déjà inscrit ? </span>
            <a class="underline text-sm font-semibold text-[#2ECC71] hover:text-[#27AE60] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Connectez-vous') }}
            </a>
        </div>
    </form>
</x-guest-layout>