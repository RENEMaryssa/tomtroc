@php
// Définir la couleur verte principale pour le thème TomTroc
$tomtrocGreen = '#2ECC71';
// Couleur de fond du HERO et de la section "Comment ça marche ?"
$tomtrocCream = '#F7F6F3';
// VERT SPÉCIFIQUE AU BOUTON "VOIR TOUS LES LIVRES" (vert foncé #006D41)
$tomtrocDarkGreen = '#006D41';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'TomTroc') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800 flex flex-col min-h-screen">

    @include('layouts.header')

    <section class="w-full py-20" style="background-color: {{ $tomtrocCream }};">
    <div class="max-w-6xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-10">
        <div class="flex-1 text-center lg:text-left">

            <h1 class="text-4xl lg:text-5xl font-serif font-normal leading-tight mb-6">
                Rejoignez nos <br> <span class="font-bold" style="color: {{ $tomtrocGreen }};">lecteurs passionnés</span>
            </h1>

            <p class="text-lg text-gray-700 max-w-md mx-auto lg:mx-0 mb-6">
                Donnez une nouvelle vie à vos livres en les échangeant avec d'autres lecteurs. Rejoignez une communauté active et solidaire pour partager des connaissances et d'histoires à travers les pages.
            </p>

            <a href="{{ route('register') }}"
                class="inline-block text-white px-8 py-3 rounded-md font-semibold transition shadow-lg mt-12 hover:opacity-90"
                style="background-color: {{ $tomtrocGreen }};">
                Découvrir
            </a>
        </div>

        <div class="flex-1 flex justify-center">
            <img src="{{ asset('images/hero-tomtroc-books.jpg') }}" alt="Petite boutique de livres" class="max-w-full h-auto rounded-lg shadow-xl" style="max-height: 400px; object-fit: cover;">
        </div>
    </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-normal mb-12 text-gray-800">Les derniers livres ajoutés</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-10">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="text-left space-y-2">
                    <img src="{{ asset('images/book-cover-' . $i . '.png') }}" alt="Couverture de livre" class="w-full h-auto rounded-md mb-2 shadow-md hover:shadow-xl transition duration-300">
                    <p class="font-semibold text-gray-800">Titre Livre {{ $i }}</p>
                    <p class="text-sm text-gray-500">Auteur Nom</p>
            </div>
            @endfor
        </div>

        <a href="{{ route('books.index') }}" class="inline-block px-8 py-3 rounded-md font-semibold transition hover:bg-gray-50" style="border: 1px solid {{ $tomtrocGreen }}; color: {{ $tomtrocGreen }}; background-color: transparent;">
            Voir tous les livres
        </a>
        </div>
    </section>

    <section class="py-20" style="background-color: {{ $tomtrocCream }};">
        <div class="max-w-6xl mx-auto px-4 text-center">

            <h2 class="text-gray-800 mx-auto"
                style="
                width: 321px; 
                font-family: 'Playfair Display', serif; 
                font-size: 32px; 
                line-height: 2; /* Ajusté de 2 à 1.3 pour l'espacement entre le titre et le texte */
                margin-bottom: 4px;
                font-weight: 400;
            ">
                Comment ça marche ?
            </h2>

            <div style="margin-bottom: 2rem;">
                <p class="text-gray-600 mx-auto"
                    style="width: 397px; font-size: 16px; line-height: 1.5; text-align: center;">
                    Échanger des livres avec TomTroc c’est simple et amusant ! Suivez ces étapes pour commencer :
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-10">

                <div class="w-[215px] h-[139px] bg-white rounded-xl shadow-md flex items-center justify-center text-center p-6 transition hover:shadow-lg">
                    <p class="text-gray-800 leading-snug mx-auto"
                        style="width: 180px; font-size: 14px; font-weight: 400; line-height: 1.5;">
                        Inscrivez-vous gratuitement sur notre&nbsp;plateforme.
                    </p>
                </div>

                <div class="w-[215px] h-[139px] bg-white rounded-xl shadow-md flex items-center justify-center text-center p-6 transition hover:shadow-lg">
                    <p class="text-gray-800 leading-snug mx-auto"
                        style="width: 180px; font-size: 14px; font-weight: 400; line-height: 1.5;">
                        Ajoutez les livres que vous souhaitez échanger à votre&nbsp;profil.
                    </p>
                </div>

                <div class="w-[215px] h-[139px] bg-white rounded-xl shadow-md flex items-center justify-center text-center p-6 transition hover:shadow-lg">
                    <p class="text-gray-800 leading-snug mx-auto"
                        style="width: 180px; font-size: 14px; font-weight: 400; line-height: 1.5;">
                        Parcourez les livres disponibles chez d’autres membres.
                    </p>
                </div>

                <div class="w-[215px] h-[139px] bg-white rounded-xl shadow-md flex items-center justify-center text-center p-6 transition hover:shadow-lg">
                    <p class="text-gray-800 leading-snug mx-auto"
                        style="width: 180px; font-size: 14px; font-weight: 400; line-height: 1.5;">
                        Proposez un échange et discutez&nbsp;avec d'autres passionnés&nbsp;de lecture.
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{ route('books.index') }}"
                    class="inline-block px-8 py-3 rounded-md font-semibold transition duration-300 border border-solid hover:shadow-lg"
                    style="border-color: {{ $tomtrocGreen }}; color: {{ $tomtrocGreen }}; background-color: transparent; border-width: 1px;"
                    onmouseover="this.style.backgroundColor='{{ $tomtrocDarkGreen }}'; this.style.color='white'"
                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='{{ $tomtrocGreen }}'">
                    Voir tous les livres
                </a>
            </div>
        </div>
    </section>


    <footer class="w-full bg-white border-t border-gray-100 mt-auto">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between text-xs text-gray-500">
            <p>&copy; 2025 TomTroc</p>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-gray-700">Politique de confidentialité</a>
                <a href="#" class="hover:text-gray-700">Mentions légales</a>
            </div>
        </div>
    </footer>

</body>

</html>