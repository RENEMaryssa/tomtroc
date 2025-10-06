<header class="w-full bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-12">
            <a href="{{ url('/') }}" class="flex items-center text-2xl font-bold text-[#2ECC71]">
                <img src="{{ asset('resources/images/logo-tomtroc.png') }}" alt="Logo TomTroc" class="h-8 w-auto">
            </a>

            <nav class="hidden sm:flex items-center gap-6 text-gray-700">
                <a href="{{ url('/') }}" class="hover:text-[#2ECC71] transition font-medium">Accueil</a>
                <a href="{{ route('books.index') }}" class="hover:text-[#2ECC71] transition font-medium">Nos livres à l’échange</a>
            </nav>
        </div>

        <div class="flex items-center gap-4 text-gray-700">
            @auth
                <a href="#" class="flex items-center hover:text-[#2ECC71] transition">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Messages
                    <span class="ml-1 text-xs font-bold text-[#2ECC71]">(0)</span>
                </a>
                <a href="{{ route('profile.edit') }}" class="flex items-center hover:text-[#2ECC71] transition">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Mon compte
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-gray-700 hover:text-[#2ECC71] transition">
                        Déconnexion
                    </button>
                </form>

            @else
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-[#2ECC71] transition">
                    Connexion
                </a>
            @endauth
        </div>

        </div>
</header>