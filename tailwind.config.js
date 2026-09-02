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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                indigo: {
                    50: '#fdf3f5',
                    100: '#FAE8ED',
                    200: '#f1cbd5',
                    300: '#e7a9b9',
                    400: '#d98197',
                    500: '#C8607A', // Brand Pink
                    600: '#B04E68', // Brand Pink Hover
                    700: '#913b52',
                    800: '#7a3447',
                    900: '#67303f',
                },
                purple: {
                    50: '#fdf3f5',
                    100: '#FAE8ED',
                    200: '#f1cbd5',
                    300: '#e7a9b9',
                    400: '#d98197',
                    500: '#C8607A', // Brand Pink
                    600: '#B04E68', // Brand Pink Hover
                    700: '#913b52',
                    800: '#7a3447',
                    900: '#67303f',
                },
            },
        },
    },

    plugins: [forms],
};
