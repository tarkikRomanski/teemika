
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

Vue.component('login', require('./components/admin/Login.vue'));

const app = new Vue({
    el: '#app'
});
