window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    // global.$ = global.jQuery = window.$ = window.jQuery = require('jquery');
    global.$ = global.jQuery = require('jquery');
    //window.Popper = require('popper.js').default;
    window.Popper = require('@popperjs/core/dist/umd/popper').default;
    window.bootstrap = require('bootstrap');
    require('bootstrap-select');


    require('jquery.cookie');


    require('jquery-migrate');



} catch (e) {
    console.log('--- error ---');
    console.log(e);
}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

//import { Toast, Tooltip, Popover } from 'bootstrap';
