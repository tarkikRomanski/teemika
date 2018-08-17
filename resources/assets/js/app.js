
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

window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + Vue.auth.getToken();
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
Vue.component('admin', require('./components/admin/Admin'));
/**
 * End custom components
 */

const app = new Vue({
    el: '#app',
    router: Router
});
