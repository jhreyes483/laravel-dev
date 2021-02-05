const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

    mix.styles([
        'resources/template/css/bootstrap.min.css',
        'resources/template/css/font-awesome.min.css',
        'resources/template/css/ionicons.min.css',
        'resources/template/css/AdminLTE.min.css',
        'resources/template/css/_all-skins.min.css',
        'resources/template/css/estilos.css',
    ], 'public/css/app.css')
    
        .scripts([
            'resources/template/js/jquery.min.js',
            'resources/template/js/bootstrap.min.js',
            'resources/template/js/Chart.js',
            'resources/template/js/fastclick.js',
            'resources/template/js/adminlte.min.js',
            'resources/template/js/demo.js',
        ], 'public/js/app.js');
