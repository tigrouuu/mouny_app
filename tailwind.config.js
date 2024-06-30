/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/!*.blade.php',
        './storage/framework/views/!*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        /*'./node_modules/preline/dist/!*.js',*/
    ],
    theme: {
        /*container: {
            // you can configure the container to be centered
            center: true,

            // or have default horizontal padding
            //padding: '1rem',

            // default breakpoints but with 40px removed
            screens: {
                sm: '450px',
                md: '720px',
                lg: '960px',
                xl: '1140px',
                '2xl': '1320px',
            },*/
        extend: {},
        /*plugins: [require('@tailwindcss/forms'), require('preline/plugin')],*/
    },
}
