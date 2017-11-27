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
   .js('node_modules/mdbootstrap/js/mdb.min.js','public/js')
   .copy('node_modules/mdbootstrap/css/mdb.min.css','public/css')
   .js('public/js/mdb.min.js','resources/assets/js');
