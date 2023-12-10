import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            colors: {
                'accentprimary' : '#E3651D',
                'accentsecondary' : '#F05941',
                'bgprimary' : '#191919',
                'bgsecondary' : '#2C3333',
                'textprimary' : '#212123',
                'textsecondary' : '#787876',

                'darkaccentprimary' : '#E3651D',
                'darkaccentsecondary' : '#F05941',
                'darkbgprimary' : '#191919',
                'darkbgsecondary' : '#2C3333',
                'darktextprimary' : '#ECECEC',
                'darktextsecondary' : '#BCBCBC'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
