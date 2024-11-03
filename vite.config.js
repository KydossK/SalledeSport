import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/contact.css', 'resources/css/cours.css', 'resources/css/tarifs.css', 'resources/css/home.css','resources/js/app.js'],
            refresh: true,
        }),
    ],
});
