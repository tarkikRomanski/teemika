
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
import Auth from './packages/auth/Auth.js';
Vue.use(Auth);
/**
 * End include Auth package
 */

/**
 * Start include Sweet Alert
 */
import VueSwal from 'vue-swal'
Vue.use(VueSwal);
/**
 * End include Sweet Alert
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

Vue.component('register', require('./components/admin/auth/Register'));
Vue.component('login', require('./components/admin/auth/Login'));
Vue.component('auth', require('./components/admin/auth/Auth'));

const app = new Vue({
    el: '#app'
});
