const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       //
   ])
   .browserSync({
       proxy: 'http://127.0.0.1:8000', // ton URL locale
       files: [
           'resources/views/**/*.blade.php',
           'resources/js/**/*.js',
           'resources/css/**/*.css'
       ]
   });
