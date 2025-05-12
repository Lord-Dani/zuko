import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/about.css',
                'resources/css/auth.css',
                'resources/css/base.css',
                'resources/css/delivery.css',
                'resources/css/profile.css',
                'resources/css/vacancies.css',

                'resources/js/app.js',
                'resources/js/about.js',
                'resources/js/auth.js',
                'resources/js/baza.js',
                'resources/js/bootstrap.js',
                'resources/js/delivery.js',
                'resources/js/orders.js',
                'resources/js/profile.js',
                'resources/js/vacancies.js'
            ],
            refresh: true,
        }),
        
    ],
});