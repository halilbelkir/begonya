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
const Public = 'public/';
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .combine(
        [
            Public + 'front/js/jquery.js',
            Public + 'front/js/jquery-ui.js',
            Public + 'front/js/jquery.themepunch.tools.min.js',
            Public + 'front/js/jquery.themepunch.revolution.min.js',
            Public + 'front/js/revolution.extension.actions.min.js',
            Public + 'front/js/revolution.extension.kenburn.min.js',
            Public + 'front/js/revolution.extension.layeranimation.min.js',
            Public + 'front/js/revolution.extension.migration.min.js',
            Public + 'front/js/revolution.extension.carousel.min.js',
            Public + 'front/js/revolution.extension.navigation.min.js',
            Public + 'front/js/revolution.extension.parallax.min.js',
            Public + 'front/js/revolution.extension.slideanims.min.js',
            Public + 'front/js/revolution.extension.video.min.js',
            Public + 'front/js/plugins.js',
            Public + 'front/js/functions.js',
            Public + 'front/js/script.js',
        ], Public + 'js/front/front.js')
    .styles(
        [
            Public + 'front/css/plugins.css',
            Public + 'front/css/style.css',
            Public + 'front/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
            Public + 'front/fonts/font-awesome/css/font-awesome.css',
            Public + 'front/css/settings.css',
            Public + 'front/css/layers.css',
            Public + 'front/css/navigation.css',
        ], Public + 'css/front/front.css')
    .version();
