const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
      theme: {
            extend: {
                colors: {
                'nile': {  DEFAULT: '#162D48',
                  '50': '#3c5778',
                  '100': '#5D90CD',
                  '200': '#3A76BD',
                  '300': '#2E5E96',
                  '400': '#22456F',
                  '500': '#162D48',
                  '600': '#0A1521',
                  '700': '#041f40',
                  '800': '#041c38',
                  '900': '#021429'},
        },
                fontFamily: {
                    sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
