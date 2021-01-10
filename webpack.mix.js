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

mix.styles([
    'resources/assets/css/style.css',
    'resources/assets/css/swipebox.css',
],'public/fronts/css/front.css');

mix.scripts([
    'resources/assets/js/jquery.swipebox.min.js',
    'resources/assets/js/jquery-1.11.1.min.js',
    'resources/assets/js/modernizr.custom.69142.js',
    'resources/assets/js/typeahead.bundle.js',
], 'public/fronts/js/front.js')

mix.copyDirectory('resources/assets/images', 'public/fronts/images');

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/plugins/select2/css/select2.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/admin/css/adminlte.min.css',
], 'public/admin/css/admin.css');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/select2/js/select2.full.js',
    'resources/assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.js',
    'resources/assets/admin/js/adminlte.min.js',
    'resources/assets/admin/js/demo.js'
], 'public/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/img', 'public/admin/img');
mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/admin/webfonts');

mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/admin/css/adminlte.min.css.map');
