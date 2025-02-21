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
            screens: {
                'xs': '0px',
                'sm': '360px',
                'md': '768px',
                'lg': '992px',
                'xl': '1200px',
                'xxl': '1600px',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                Quicksand: ['Quicksand', 'sans-serif'],
                opensans: ["Open Sans", 'sans-serif']
            },
        },
    },

    // plugins: [forms],
};
