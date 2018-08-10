
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

/**
 * Start include BootstrapVue
 */
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)
/**
 * End include BootstrapVue
 */


Vue.mixin({
    methods: {
        getApiUrl(slug) {
            var protocol = location.protocol;
            var slashes = protocol.concat("//");
            var host = slashes.concat(window.location.hostname);
            return host + '/' + slug;
        }
    }
});

Vue.component('login', require('./components/admin/Login.vue'))

const app = new Vue({
    el: '#app'
});
