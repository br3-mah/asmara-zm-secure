const mix = require('laravel-mix');

mix.js('resources/js/styler.js', 'public/js')
   .sass('resources/scss/styler.scss', 'public/css');