/**
 * https://github.com/laravel-mix/laravel-mix/issues/1722
 */

let mix = require('laravel-mix');
const path = require('path');

//Non serve più su webpack >= 5
//require('laravel-mix-polyfill');
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

var public_path = 'Resources/dist';

mix.js('Resources/js/app.js', 'js');

mix.sass('Resources/scss/app.scss', 'css');

mix.vue({ version: 3 });
/*
mix.postCss('Resources/css/app.css', 'Reources/views/dist/css', [
    //
]);
*/
//mix.setResourceRoot('../');
mix.setPublicPath(public_path);

//Make jQuery Available to Every Module
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
});

mix.extract([
    'axios',
    'vue',
    'popper.js',
    'jquery',
    'bootstrap',
]);

mix.webpackConfig({
    resolve: {
        modules: [
            path.resolve(__dirname, 'node_modules')
        ]
    },
    plugins: [],
});

//*/
//dice che da webpack >= 5  non serve più
/*mix.polyfill({
    enabled: true,
    useBuiltIns: "usage",
    targets: { "firefox": "50", "ie": 11 }
});*/

//With File Versioning
//mix.version();
//Generate JavaScript source maps.
mix.sourceMaps();

var $from = './Resources/dist';
var $to = '../../../public_html/themes/Italia10/dist';
console.log('from :' + $from);
console.log('to :' + $to);

//UnhandledPromiseRejectionWarning: Error: ENOENT: no such file or directory, open 'F:\var\www\base_xxx\laravel\Themes\AdminLTE\Resources\views\dist\public_html\themes\AdminLTE\dist\admin-lte.css'
//Error: ENOENT: no such file or directory, open 'F:\Resources\views\dist\css\admin-lte.css'

mix.copyDirectory($from, $to);