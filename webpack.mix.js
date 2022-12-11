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

mix.js('resources/js/app.js', 'public/js').vue()
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/utils.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/bootstrap.css', 'public/css')
    .postCss('resources/css/main.css', 'public/css')
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}

mix.disableNotifications();
