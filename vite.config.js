import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    publicDir: 'public',
    root: './',
    build: {
        outDir: 'dist',
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'public/appvilla/css/bootstrap.min.css',
                'public/appvilla/css/lineicons.css',
                'public/appvilla/css/animate.min.css',
                'public/appvilla/css/tiny-slider.css',
                'public/appvilla/css/glightbox.min.css',
                'public/appvilla/css/main.css',
            ],
            refresh: true,
        }),
    ],
});
