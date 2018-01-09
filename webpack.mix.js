let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .js('resources/assets/templates/clients/js/easing.js', 'public/templates/clients/js')
   .js('resources/assets/templates/clients/js/move-top.js', 'public/templates/clients/js')
   .js('resources/assets/templates/clients/js/jquery-ui.js', 'public/templates/clients/js')
   .js('resources/assets/templates/clients/js/jquery.tools.min.js', 'public/templates/clients/js')
   .js('resources/assets/templates/clients/js/SmoothScroll.min.js', 'public/templates/clients/js')
   .js('resources/assets/templates/clients/js/jquery.cm-overlay.js', 'public/templates/clients/js')
   .js('resources/assets/templates/clients/js/jquery.mobile.custom.min.js', 'public/templates/clients/js')
   .styles('resources/assets/templates/clients/css/jquery-ui.css', 'public/templates/clients/css/jquery-ui.css')
   .styles('resources/assets/templates/clients/css/style.css', 'public/templates/clients/css/style.css')
   .styles('resources/assets/templates/clients/css/cm-overlay.css', 'public/templates/clients/css/cm-overlay.css');
mix.copyDirectory('resources/assets/templates/clients/images', 'public/templates/clients/images');
