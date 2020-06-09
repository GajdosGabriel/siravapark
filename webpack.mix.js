const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .copy('node_modules/aos/dist/aos.css', 'public/css/aos')
    .copy('node_modules/aos/dist/aos.js', 'public/js/aos')
    .copy('node_modules/lightbox2/dist/css/lightbox.min.css', 'public/css/lightbox/css')
    .copyDirectory('node_modules/lightbox2/dist/images', 'public/css/lightbox/images')
    .copy('node_modules/lightbox2/dist/js/lightbox.min.js', 'public/js/lightbox')
    .sass('resources/sass/app.scss', 'public/css');
