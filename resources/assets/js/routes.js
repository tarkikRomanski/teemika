import Vue from 'vue';
import VueRouter from 'vue-router';

// custom components
import Auth from './components/admin/auth/Auth';
import Dashboard from './components/admin/Dashboard';
//

// routes
import AuthRoutes from './routes/auth';
//

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/auth',
            name: 'authentication',
            component: Auth,
            children: AuthRoutes,
        },
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard,
            meta: {
                middleware: {
                    type: 'auth'
                }
            }
        }
    ],


});

export default router;