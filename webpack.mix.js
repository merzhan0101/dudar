const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resouces/sass/app.scss', 'public/css');