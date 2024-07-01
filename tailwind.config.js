const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
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
                'bdark-rv': '#1C2434',
                'white-rv': '#f8fafc',
                'red-rv' :  '#CC2A41'
            },
            fontWeight: {
                extraLight: 100,
                light: 200,
                normal: 400,
                medium: 500,
                semiBold: 600,
                bold: 700,
                extraBold: 800,
                black: 900,
            },
        },
        
    },

    plugins: [require('@tailwindcss/forms')],
};
