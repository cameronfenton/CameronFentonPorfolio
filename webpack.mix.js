const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') // Existing app.js
   .js('resources/js/theme-toggle.js', 'public/js') // Add theme-toggle.js for theme toggling
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .postCss('resources/css/custom.css', 'public/css') // Custom styling
   .postCss('resources/css/project.css', 'public/css') // Project-specific styling
   .version(); // Enable versioning for cache busting