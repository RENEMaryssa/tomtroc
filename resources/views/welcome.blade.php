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

                <p class="max-w-md mx-auto lg:mx-0"
                    style="
                /* Styles demandés */
                font-family: 'Inter', sans-serif;
                font-weight: 300; /* Light */
                font-size: 16px; 
                line-height: 1.5; /* Rétablit un espacement lisible pour le web, car line-height: 100% est trop serré */
                color: #4B5563; /* Couleur Tailwind text-gray-700 ajustée */
                margin-bottom: 2rem; /* Espace après le paragraphe avant le bouton (ajusté de 6 à 8) */
                ">
                    Donnez une nouvelle vie à vos livres en les échangeant avec d'autres lecteurs. Rejoignez une communauté active et solidaire pour partager des connaissances et d'histoires à travers les pages.
                </p>

                <a href="{{ route('register') }}"
                    class="inline-block text-white px-8 py-3 rounded-md font-semibold transition shadow-lg mt-12 hover:opacity-90"
                    style="background-color: {{ $tomtrocGreen }};">
                    Découvrir
                </a>
            </div>

            <div class="flex-1 flex justify-center lg:justify-end">
                <img src="{{ asset('images/hero-tomtroc-books.png') }}"
                    alt="Petite boutique de livres"
                    class="max-w-full h-auto rounded-lg shadow-xl"
                    style="
                    /* Dimensions exactes du design */
                    width: 404px; 
                    height: 539px; 
                    object-fit: cover;
                    /* Retrait du max-height pour que height: 539px soit appliqué */
                 ">
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">

        <h2 class="text-3xl font-normal mb-12 text-gray-800" style="font-family: 'Playfair Display', serif;">
            Les derniers livres ajoutés
        </h2>

        <div class="flex justify-center">
            <div class="flex flex-wrap justify-center gap-8 mb-10">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="text-left w-[200px] hover:shadow-lg transition duration-300">

                        <img src="{{ asset('images/book-cover-' . $i . '.png') }}"
                            alt="Couverture de livre"
                            class="w-full h-auto rounded-md mb-2 shadow-md"
                            style="
                                width: 200px;
                                height: 200px;
                                object-fit: cover;
                                transform: rotate(0deg);
                                opacity: 1;
                                ">

                        <!-- Bloc texte avec dimensions fixées -->
                        <div style="
                            width: 200px;
                            height: 124px;
                            transform: rotate(0deg);
                            opacity: 1;
                        ">
                            <p class="font-semibold text-gray-800 text-sm">Titre Livre {{ $i }}</p>
                            <p class="text-xs text-gray-500">Vendu par Auteur Nom</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
            
        </div>
        <a href="{{ route('books.index') }}"
    class="inline-block text-white px-8 py-3 rounded-md font-semibold transition shadow-lg mt-12 hover:opacity-90"
    style="background-color: {{ $tomtrocGreen }}; display: block; margin: 0 auto; width: fit-content;">
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

    @include('layouts.footer')

</body>

</html>