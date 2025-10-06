import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
    fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
        playfair: ['Playfair Display', 'serif'],
    },
    colors: {
        tomtroc: {
            green: '#2ECC71',
            cream: '#F7F6F3',
            'dark-green': '#006D41',
        },
    },
    spacing: {
        200: '200px', // pour cartes livres
        215: '215px', // cartes "Comment ça marche"
    },
}

    },

    plugins: [
        forms,
        // OPTIONNEL : Si vous souhaitez définir des composants directement dans le config,
        // vous pouvez le faire ici, mais la méthode de l'étape précédente (dans app.css) est déjà bonne.
    ],
};