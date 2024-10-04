import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style.css', 'resources/css/stylelogada.css', 'resources/css/stylesemlogin.css', 'resources/js/app.js', 'resources/js/script.js', 'resources/js/scriptlogada.js', 'resources/js/scriptsemlogin.js'],
            refresh: true,
        }),
    ],
});
