import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    publicDir: 'public',
    root: './',
    build: {
        outDir: 'dist',
    },
    plugins: [
        laravel({
            input: [
                'resources/assets/appvilla/css/bootstrap.min.css',
                'resources/assets/appvilla/css/lineicons.css',
                'resources/assets/appvilla/css/animate.min.css',
                'resources/assets/appvilla/css/tiny-slider.css',
                'resources/assets/appvilla/css/glightbox.min.css',
                'resources/assets/appvilla/css/main.css',
            ],
            /*output: {
                dir: 'dist',
            },*/
            refresh: true,
        }),
    ],
})
