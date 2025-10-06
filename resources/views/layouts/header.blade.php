@php
$tomtrocGreen = '#2ECC71';
$tomtrocGray = '#525252'; // Couleur du texte de navigation
@endphp

<header class="w-full bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">

        <div class="flex items-center gap-12">
            <a href="{{ url('/') }}" class="flex items-center text-2xl font-bold text-[#2ECC71]">
                <img src="{{ asset('images/logo-tomtroc.png') }}" alt="Logo TomTroc" class="h-8 w-auto">
            </a>

            <nav class="hidden sm:flex items-center gap-6 text-base font-normal" style="color: {{ $tomtrocGray }};">
                <a href="{{ url('/') }}" class="hover:text-black transition">Accueil</a>
                <a href="{{ route('books.index') }}" class="hover:text-black transition">Nos livres à l'échange</a>
            </nav>
        </div>

        <div class="flex items-center gap-6 text-base font-normal" style="color: {{ $tomtrocGray }};">

            <a href="#" class="flex items-center hover:text-black transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <circle cx="12" cy="12" r="5" class="fill-transparent"></circle>
                </svg>
                Messagerie
                <span class="ml-1 text-sm text-gray-500">(0)</span>
            </a>

            <a href="{{ route('profile.edit') }}" class="flex items-center hover:text-black transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <circle cx="12" cy="12" r="5" class="fill-transparent"></circle>
                </svg>
                Mon compte
            </a>

            <a href="{{ route('login') }}" class="text-base font-normal hover:text-black transition">
                Connexion
            </a>

        </div>
    </div>
</header>
