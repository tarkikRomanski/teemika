
require('./bootstrap');

window.Vue = require('vue');

/**
 * Start include BootstrapVue
 */
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);
/**
 * End include BootstrapVue
 */

/**
 * Start include Auth package
 */
import Auth from './plugins/auth';
Vue.use(Auth);
/**
 * End include Auth package
 */

/**
 * Start include Sweet Alert
 */
import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);
/**
 * End include Sweet Alert
 */

/**
 * Froala begin
 */
// Require Froala Editor js file.
require('froala-editor/js/froala_editor.pkgd.min');

// Require Froala Editor css files.
require('froala-editor/css/froala_editor.pkgd.min.css');
require('font-awesome/css/font-awesome.css');
require('froala-editor/css/froala_style.min.css');

// Import and use Vue Froala lib.
import VueFroala from 'vue-froala-wysiwyg';
Vue.use(VueFroala);
/**
 * Froala end
 */

/**
 * Start routers include
 */
import Router from './routes.js';
/**
 * End routers include
 */

Vue.mixin({
    methods: {
        getApiUrl(slug) {
            let protocol = location.protocol;
            let slashes = protocol.concat("//");
            let host = slashes.concat(window.location.hostname);
            return host + '/' + slug;
        }
    }
});

/**
 * Start custom components
 */
Vue.component('nav-bar', require('./components/admin/NavBar'));
Vue.component('admin', require('./components/admin/Admin'));
/**
 * End custom components
 */

const app = new Vue({
    el: '#app',
    router: Router
});
