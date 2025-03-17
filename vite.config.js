import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/custom.css',
            'resources/css/project.css',
            'resources/js/app.js',
            'resources/js/theme-toggle.js',
        ]),
    ],
});
