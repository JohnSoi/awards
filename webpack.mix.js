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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.options({
    processCssUrls: false
}).sourceMaps();

mix.setPublicPath('public_html/');
mix.version();

mix
    .js('resources/js/app.js', 'js')
    .js('resources/js/page/index.js', 'js/page')
    .js('resources/js/page/dark.js', 'js/page')
    .js('resources/js/page/errors.js', 'js/page')
    .sass('resources/scss/app.scss', 'css')
    .sass('resources/scss/page/main/index.scss', 'css/page')
    .css('resources/css/page/dark.css', 'css/page')
    .css('resources//css/page/errors/404.css', 'css/page/errors')
    .css('resources//css/page/errors/500.css', 'css/page/errors')
;