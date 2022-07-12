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

mix.setPublicPath('./public_html/');

mix
    .js('resources/js/reg.js', 'js')
    .js('resources/js/app.js', 'js')
    .js('resources/js/admin.js', 'js')
    .js('resources/js/page/index.js', 'js/page')
    .js('resources/js/page/dark.js', 'js/page')
    .js('resources/js/page/errors.js', 'js/page')
    .js('resources/js/page/competition.js', 'js/page')
    .js('resources/js/page/form/index.js', 'js/page/form')
    .js('resources/js/page/news/index.js', 'js/page/news')
    .js('resources/js/page/auth/login.js', 'js/page/auth')
    .js('resources/js/page/auth/register.js', 'js/page/auth')
    .js('resources/js/page/photos/index.js', 'js/page/photos')
    .js('resources//js/page/auth/passwords/email.js', '/js/page/auth/passwords')
    .js('resources//js/page/auth/passwords/reset.js', '/js/page/auth/passwords')
    .sass('resources/scss/app.scss', 'css')
    .sass('resources/scss/new-design.scss', 'css')
    .sass('resources/scss/page/main/index.scss', 'css/page/main')
    .sass('resources/scss/page/form/index.scss', 'css/page/form')
    .sass('resources/scss/page/lk/index.scss', 'css/page/lk')
    .sass('resources/scss/page/photos/index.scss', 'css/page/photos')
    .css('resources/css/page/dark.css', 'css/page')
    .css('resources/css/page/userArea/index.css', 'css/page/userArea')
    .css('resources/css/page/agreement/index.css', 'css/page/agreement')
    .css('resources/css/page/auth/index.css', 'css/page/auth')
    .css('resources/css/page/errors/404.css', 'css/page/errors')
    .css('resources/css/page/errors/500.css', 'css/page/errors')
    .css('resources/css/page/news/index.css', 'css/page/news')
    .css('resources/css/page/competition/index.css', 'css/page/competition')
    .copy('resources/page_image/sergei_kirienko.jpg', 'public_html/page_image')
    .copy('resources/page_image/roscult.png', 'public_html/page_image')
    .copy('resources/page_image/award-symbol.png', 'public_html/page_image')
;